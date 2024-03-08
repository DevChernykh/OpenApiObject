<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject\Info;

use Chernykh\OpenApiObject\Part\Email;
use Chernykh\OpenApiObject\Part\URI;

class Contact
{
    protected ?string $name = null;
    protected ?URI $uri = null;
    protected ?Email $email = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): Contact
    {
        $this->name = $name;
        return $this;
    }

    public function getUri(): ?URI
    {
        return $this->uri;
    }

    public function setUri(?URI $uri): Contact
    {
        $this->uri = $uri;
        return $this;
    }

    public function getEmail(): ?Email
    {
        return $this->email;
    }

    public function setEmail(?Email $email): Contact
    {
        $this->email = $email;
        return $this;
    }
}
