<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

use Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class FriendshipRing extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Friendship Ring', 'Symbol of a meeting', '0x1');
    }
}
