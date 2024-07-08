<?php

declare(strict_types=1);

namespace ADS\Bundle\EventEngineBundle\Attribute;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class Specification
{
    /** @param class-string $specification */
    public function __construct(
        private readonly string $specification,
    ) {
    }

    /** @return class-string */
    public function specification(): string
    {
        return $this->specification;
    }
}
