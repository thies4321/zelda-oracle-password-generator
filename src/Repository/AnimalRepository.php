<?php

declare(strict_types=1);

namespace Zopg\Repository;

use Zopg\Model\Animal;

interface AnimalRepository
{
    public function getByIdentifier(int $identifier): ?Animal;

    public function getByName(string $name): ?Animal;
}