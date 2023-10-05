<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class GreenHolyRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Green Holy Ring', 'No damage from electricity', '0x40000000');
    }
}
