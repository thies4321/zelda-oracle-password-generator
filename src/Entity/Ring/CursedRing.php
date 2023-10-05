<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class CursedRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Cursed Ring', '1/2 sword damage\nx2 damage taken', '0x400');
    }
}
