<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject;

use Chernykh\OpenApiObject\Part\RichText;
use Chernykh\OpenApiObject\Part\URI;

class ExternalDocs
{
    protected null|string|RichText $description = null;

    public function __construct(
        protected readonly URI $uri,
    ) {
    }

    public function getUri(): URI
    {
        return $this->uri;
    }

    public function setDescription(null|string|RichText $description): ExternalDocs
    {
        $this->description = $description;
        return $this;
    }

    public function getDescription(): null|string|RichText
    {
        return $this->description;
    }
}
