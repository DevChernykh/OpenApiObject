<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Support;

abstract class HTTPStatus
{
    public function __construct(
        public readonly int $value,
    ) {
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return (string) $this->value;
    }
}
