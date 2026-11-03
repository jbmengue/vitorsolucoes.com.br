<?php

declare(strict_types=1);

namespace App\ValueObjects\Service;

final class ServiceRequestContent
{
  private const DEFAULT_TITLE = 'Solicite seu atendimento ainda hoje';
  private const DEFAULT_SUBTITLE = 'Abra seu chamado de forma rápida e fácil';

  private function __construct(public readonly string $title, public readonly string $subtitle) {}

  public static function fromConfig(mixed $config): self
  {
    $config = is_array($config) ? $config : [];

    return new self(
      title: self::stringOrDefault($config['title'] ?? null, self::DEFAULT_TITLE),
      subtitle: self::stringOrDefault($config['subtitle'] ?? null, self::DEFAULT_SUBTITLE),
    );
  }

  private static function stringOrDefault(mixed $value, string $default): string
  {
    if (!is_string($value)) {
      return $default;
    }

    $value = trim($value);

    return $value !== '' ? $value : $default;
  }
}
