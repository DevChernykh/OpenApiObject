<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Part;

class URI
{
    public function __construct(
        private readonly string $value,
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
