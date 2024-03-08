<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Part\HTTPStatus;

use Chernykh\OpenApiObject\Part\HTTPStatus;

class HTTPInformationStatus extends HTTPStatus
{
    public const CONTINUE = 100;
    public const SWITCHING_PROTOCOLS = 101;
    public const SWITCHING_PROCESSING = 102;
    public const SWITCHING_EARLY_HINTS = 103;
}
