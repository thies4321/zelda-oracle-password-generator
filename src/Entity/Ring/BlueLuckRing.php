<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class BlueLuckRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Blue Luck Ring', '1/2 damage from beams', '0x8000000');
    }
}
