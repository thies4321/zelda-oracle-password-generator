<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class RedLuckRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Red Luck Ring', '1/2 damage from spiked floors', '0x20000000');
    }
}
