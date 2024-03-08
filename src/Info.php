<?php

declare(strict_types=1);

namespace Chernykh\OpenApiObject;

use Chernykh\OpenApiObject\Info\Contact;
use Chernykh\OpenApiObject\Info\License;
use Chernykh\OpenApiObject\Part\RichText;
use Chernykh\OpenApiObject\Part\URI;

class Info
{
    protected ?string $summary = null;
    protected null|string|RichText $description = null;
    protected ?URI $termsOfService = null;
    protected ?Contact $contact = null;
    protected ?License $license = null;

    public function __construct(
        protected readonly string $title,
        protected readonly Version $version,
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getVersion(): Version
    {
        return $this->version;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): Info
    {
        $this->summary = $summary;
        return $this;
    }

    public function getDescription(): RichText|string|null
    {
        return $this->description;
    }

    public function setDescription(RichText|string|null $description): Info
    {
        $this->description = $description;
        return $this;
    }

    public function getTermsOfService(): ?URI
    {
        return $this->termsOfService;
    }

    public function setTermsOfService(?URI $termsOfService): Info
    {
        $this->termsOfService = $termsOfService;
        return $this;
    }

    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    public function setContact(?Contact $contact): Info
    {
        $this->contact = $contact;
        return $this;
    }

    public function getLicense(): ?License
    {
        return $this->license;
    }

    public function setLicense(?License $license): Info
    {
        $this->license = $license;
        return $this;
    }
}
