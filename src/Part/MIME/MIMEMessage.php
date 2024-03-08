<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Part\MIME;

use Chernykh\OpenApiObject\Part\MIME;

class MIMEMessage extends MIME
{
    public const RFC822 = 'message/rfc822';
    public const HTTP = 'message/http';
    public const IMDN_XML = 'message/imdn+xml';
    public const PARTIAL = 'message/partial';
}
