<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Part\MIME;

use Chernykh\OpenApiObject\Part\MIME;

class MIMEMultipart extends MIME
{
    public const MIXED = 'multipart/mixed';
    public const ALTERNATIVE = 'multipart/alternative';
    public const RELATED = 'multipart/related';
    public const FORM_DATA = 'multipart/form-data';
    public const SIGNED = 'multipart/signed';
    public const ENCRYPTED = 'multipart/encrypted';
}
