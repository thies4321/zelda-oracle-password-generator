<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class BlueHolyRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Blue Holy Ring', 'No damage from Zora\'s fire', '0x80000000');
    }
}
