<?php

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

use Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

abstract class AbstractRing implements Ring
{
    public function __construct(
        private readonly string $name,
        private readonly string $description,
        private readonly string $value
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
