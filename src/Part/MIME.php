<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Part;

abstract class MIME
{
    public function __construct(
        public readonly string $value,
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
