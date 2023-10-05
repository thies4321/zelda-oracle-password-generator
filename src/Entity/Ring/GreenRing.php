<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class GreenRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Green Ring', 'Damage taken down by 25%\nSword damage up by 50%', '0x200');
    }
}
