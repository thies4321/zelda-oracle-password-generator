<?php

declare(strict_types=1);

namespace Zopg\Repository;

use Zopg\Model\Behavior;

interface BehaviorRepository
{
    public function getByIdentifier(int $identifier): ?Behavior;

    public function getByName(string $name): ?Behavior;
}