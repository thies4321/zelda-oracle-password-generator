<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class SteadfastRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Steadfast Ring', 'Get knocked back less', '0x10000');
    }
}
