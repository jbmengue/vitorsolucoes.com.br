<?php

declare(strict_types=1);

namespace App\ValueObjects\Service;

final class SameDayServiceContent
{
  private const DEFAULT_HIGHLIGHT = 'Atendimento no mesmo dia';
  private const DEFAULT_LABEL = 'Atendemos em:';
  private const DEFAULT_ICON = 'maps-and-flags';
  private const DEFAULT_ITEMS = [
    'Porto Alegre',
    'Vale dos Sinos',
    'Grande Porto Alegre',
    'Litoral',
  ];

  /**
   * @param list<string> $items
   */
  private function __construct(
    public readonly string $highlight,
    public readonly string $label,
    public readonly array $items,
    public readonly ?string $icon,
  ) {}

  public static function fromConfig(mixed $config): self
  {
    $config = is_array($config) ? $config : [];

    return new self(
      highlight: self::stringOrDefault($config['highlight'] ?? null, self::DEFAULT_HIGHLIGHT),
      label: self::stringOrDefault($config['label'] ?? null, self::DEFAULT_LABEL),
      items: self::itemsFromConfig($config),
      icon: self::iconFromConfig($config),
    );
  }

  public function hasIcon(): bool
  {
    return $this->icon !== null;
  }

  private static function stringOrDefault(mixed $value, string $default): string
  {
    if (!is_string($value)) {
      return $default;
    }

    $value = trim($value);

    return $value !== '' ? $value : $default;
  }

  /**
   * @param array<string, mixed> $config
   * @return list<string>
   */
  private static function itemsFromConfig(array $config): array
  {
    if (!array_key_exists('items', $config) || !is_array($config['items'])) {
      return self::DEFAULT_ITEMS;
    }

    $items = [];

    foreach ($config['items'] as $item) {
      if (!is_scalar($item)) {
        continue;
      }

      $item = trim((string) $item);

      if ($item !== '') {
        $items[] = $item;
      }
    }

    return $items;
  }

  /**
   * @param array<string, mixed> $config
   */
  private static function iconFromConfig(array $config): ?string
  {
    if (!array_key_exists('icon', $config)) {
      return self::DEFAULT_ICON;
    }

    $icon = $config['icon'];

    if ($icon === null || (is_string($icon) && trim($icon) === '')) {
      return null;
    }

    if (!is_string($icon)) {
      return self::DEFAULT_ICON;
    }

    $icon = trim($icon);

    return preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $icon) === 1 ? $icon : self::DEFAULT_ICON;
  }
}
