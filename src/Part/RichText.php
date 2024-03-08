<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Part;

class RichText
{
    public function __construct(
        private string $value,
    ) {
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
