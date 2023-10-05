<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class GoldLuckRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Gold Luck Ring', '1/2 damage from falls', '0x10000000');
    }
}
