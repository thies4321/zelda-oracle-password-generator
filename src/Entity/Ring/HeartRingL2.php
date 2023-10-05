<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class HeartRingL2 extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Heart Ring L-2', 'Recover lost Hearts', '0x100000');
    }
}
