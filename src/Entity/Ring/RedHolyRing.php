<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class RedHolyRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Red Holy Ring', 'No damage from small rocks', '0x100000000');
    }
}
