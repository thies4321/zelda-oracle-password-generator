<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class GreenLuckRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Green Luck Ring', '1/2 damage from traps', '0x4000000');
    }
}
