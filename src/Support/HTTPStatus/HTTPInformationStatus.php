<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Support\HTTPStatus;

use Chernykh\OpenApiObject\Support\HTTPStatus;

class HTTPInformationStatus extends HTTPStatus
{
    public const CONTINUE = 100;
    public const SWITCHING_PROTOCOLS = 101;
    public const SWITCHING_PROCESSING = 102;
    public const SWITCHING_EARLY_HINTS = 103;
}
