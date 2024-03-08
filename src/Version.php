<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject;

final class Version
{
    private function __construct(
        public int $major,
        public int $minor = 0,
        public int $patch = 0,
    ) {
    }

    public function get(): string
    {
        return implode('.', [
            $this->major,
            $this->minor,
            $this->patch,
        ]);
    }

    public function __toString(): string
    {
        return $this->get();
    }
}
