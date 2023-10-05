<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class PegasusRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Pegasus Ring', 'Lengthen Pegasus Seed effect', '0x20000');
    }
}
