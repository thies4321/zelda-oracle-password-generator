<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class SwimmersRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Swimmer\'s Ring', 'Swimming speed ▲', '0x200000');
    }
}
