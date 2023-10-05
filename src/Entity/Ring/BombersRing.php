<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class BombersRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Bomber\'s Ring', 'Set two Bombs at once', '0x2000000');
    }
}
