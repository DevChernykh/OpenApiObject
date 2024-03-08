<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Part\DataType;

use Chernykh\OpenApiObject\Part\DataType;

class Password extends DataType
{

    public function getType(): string
    {
        return 'string';
    }

    public function getFormat(): ?string
    {
        return 'password';
    }
}
