<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class TossRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Toss Ring', 'Throwing distance ▲', '0x40000');
    }
}
