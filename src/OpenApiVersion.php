<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject;

final readonly class OpenApiVersion
{
    public function __construct(
        public string $version,
    ) {
    }

    public function get(): string
    {
        return $this->version;
    }
}
