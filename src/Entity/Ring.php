<?php

namespace Thies\ZeldaOraclePasswordGenerator\Entity;

interface Ring
{
    public function getName(): string;
    public function getDescription(): string;
    public function getValue(): string;
}
