<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class RedRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Red Ring', 'Sword Damage x2', '0x80');
    }
}
