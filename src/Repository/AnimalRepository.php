<?php

declare(strict_types=1);

namespace Zopg\Repository;

use Zopg\Model\Animal;

interface AnimalRepository
{
    public function getByName(string $name): ?Animal;

    public function getByValue(string $value): ?Animal;
}