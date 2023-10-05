<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class ArmorRingL2 extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Armor Ring L-2', 'Sword Damage ▼▼\nDamage taken ▼▼', '0x20');
    }
}
