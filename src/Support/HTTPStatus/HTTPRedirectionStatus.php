<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Support\HTTPStatus;

use Chernykh\OpenApiObject\Support\HTTPStatus;

class HTTPRedirectionStatus extends HTTPStatus
{
    public const MULTIPLE_CHOICES = 300;
    public const MOVED_PERMANENTLY = 301;
    public const FOUND = 302;
    public const SEE_OTHER = 303;
    public const NOT_MODIFIED = 304;
    public const USE_PROXY = 305;
    public const TEMPORARY_REDIRECT = 307;
    public const PERMANENT_REDIRECT = 308;
}
