<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Part\DataType;

use Chernykh\OpenApiObject\Part\DataType;

class NumberFloat extends DataType
{

    public function getType(): string
    {
        return 'number';
    }

    public function getFormat(): ?string
    {
        return 'float';
    }
}
