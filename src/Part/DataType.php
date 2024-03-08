<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Part;

abstract class DataType
{
    public function __construct(
        private readonly mixed $value,
    ) {
    }

    public function getValue(): mixed
    {
        return $this->value;
    }

    abstract public function getType(): string;
    abstract public function getFormat(): ?string;
}
