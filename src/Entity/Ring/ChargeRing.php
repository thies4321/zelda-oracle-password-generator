<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class ChargeRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Charge Ring', 'Spin Attack charges quickly', '0x400000');
    }
}
