<?php

declare(strict_types=1);

namespace Zopg\Repository;

use Zopg\Model\Memory;

interface MemoryRepository
{
    public function getByIdentifier(int $identifier): ?Memory;

    public function getByName(string $name): ?Memory;
}