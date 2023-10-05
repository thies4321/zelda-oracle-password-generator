<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class GBATimeRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('GBA Time Ring', 'Life Advanced!', '0x4000');
    }
}
