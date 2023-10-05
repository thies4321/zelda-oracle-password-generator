<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class BlastRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Blast Ring', 'Bomb damage ▲', '0x1000');
    }
}
