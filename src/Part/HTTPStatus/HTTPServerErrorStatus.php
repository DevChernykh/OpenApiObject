<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Part\HTTPStatus;

use Chernykh\OpenApiObject\Part\HTTPStatus;

class HTTPServerErrorStatus extends HTTPStatus
{
    public const INTERNAL_SERVER_ERROR = 500;
    public const NOT_IMPLEMENTED = 501;
    public const BAD_GATEWAY = 502;
    public const SERVICE_UNAVAILABLE = 503;
    public const GATEWAY_TIMEOUT = 504;
    public const HTTP_VERSION_NOT_SUPPORTED = 505;
    public const VARIANT_ALSO_NEGOTIATES = 506;
    public const INSUFFICIENT_STORAGE = 507;
    public const LOOP_DETECTED = 508;
    public const BANDWIDTH_LIMIT_EXCEEDED = 509;
    public const NOT_EXTENDED = 510;
    public const NETWORK_AUTHENTICATION_REQUIRED = 511;
    public const UNKNOWN_ERROR = 520;
    public const WEB_SERVICE_IS_DOWN = 521;
    public const CONNECTION_TIMED_OUT = 522;
    public const ORIGINS_IS_UNREACHABLE = 523;
    public const A_TIMEOUT_OCCURRED = 524;
    public const SSL_HANDSHAKE_FAILED = 525;
    public const INVALID_SSL_CERTIFICATE = 526;
}
