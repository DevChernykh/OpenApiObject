<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Support\HTTPStatus;

use Chernykh\OpenApiObject\Support\HTTPStatus;

class HTTPSuccessStatus extends HTTPStatus
{
    public const OK = 200;
    public const CREATED = 201;
    public const ACCEPTED = 202;
    public const NON_AUTHORITATIVE = 203;
    public const NO_CONTENT = 204;
    public const RESET_CONTENT = 205;
    public const PARTIAL_CONTENT = 206;
    public const MULTI_STATUS = 207;
    public const ALREADY_REPORTED = 208;
    public const IM_USED = 226;
}
