<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class ArmorRingL1 extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Armor Ring L-1', 'Sword Damage ▼\nDamage taken ▼', '0x10');
    }
}
