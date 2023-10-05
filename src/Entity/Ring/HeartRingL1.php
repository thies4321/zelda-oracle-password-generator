<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class HeartRingL1 extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Heart Ring L-1', 'Slowly recover lost Hearts', '0x80000');
    }
}
