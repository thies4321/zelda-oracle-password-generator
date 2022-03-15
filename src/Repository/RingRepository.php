<?php

declare(strict_types=1);

namespace Zopg\Repository;

use Zopg\Model\Ring;

interface RingRepository
{
    public function getByName(string $name): ?Ring;

    public function getByDescription(string $description): ?Ring;

    public function getByValue(string $value): ?Ring;
}