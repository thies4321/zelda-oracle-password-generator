<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class ExpertsRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Expert\'s Ring', 'Punch when unequipped', '0x800');
    }
}
