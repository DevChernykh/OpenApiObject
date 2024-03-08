<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Part\DataType;

use Chernykh\OpenApiObject\Part\DataType;

class Int32 extends DataType
{

    public function getType(): string
    {
        return 'integer';
    }

    public function getFormat(): ?string
    {
        return 'int32';
    }
}
