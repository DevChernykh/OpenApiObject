<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Info;

use Chernykh\OpenApiObject\Part\URI;

class License
{
    protected ?string $identifier = null;
    protected ?URI $uri = null;

    public function __construct(
        protected readonly string $name,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(?string $identifier): License
    {
        $this->identifier = $identifier;
        return $this;
    }

    public function getUri(): ?URI
    {
        return $this->uri;
    }

    public function setUri(?URI $uri): License
    {
        $this->uri = $uri;
        return $this;
    }
}
