<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Support\MIME;

use Chernykh\OpenApiObject\Support\MIME;

class MIMEMessage extends MIME
{
    public const RFC822 = 'message/rfc822';
    public const HTTP = 'message/http';
    public const IMDN_XML = 'message/imdn+xml';
    public const PARTIAL = 'message/partial';
}
