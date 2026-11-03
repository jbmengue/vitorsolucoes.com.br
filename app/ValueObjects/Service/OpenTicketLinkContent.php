<?php

declare(strict_types=1);

namespace App\ValueObjects\Service;

final class OpenTicketLinkContent
{
  private function __construct(public readonly bool $visible) {}

  public static function fromConfig(mixed $config): self
  {
    $visible = is_array($config) && ($config['visible'] ?? null) === false ? false : true;

    return new self(visible: $visible);
  }
}
