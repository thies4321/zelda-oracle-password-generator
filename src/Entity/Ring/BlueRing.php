<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class BlueRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Blue Ring', 'Damage taken reduced by 1/2', '0x100');
    }
}
