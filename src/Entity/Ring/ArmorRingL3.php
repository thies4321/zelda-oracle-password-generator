<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class ArmorRingL3 extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Armor Ring L-3', 'Sword Damage ▼▼▼\nDamage taken ▼▼▼', '0x40');
    }
}
