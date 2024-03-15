<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Part;

readonly class RichText
{
    public function __construct(
        private string $value,
    ) {
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
