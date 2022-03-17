<?php

declare(strict_types=1);

namespace Zopg\Service;

abstract class BaseEncoding
{
    abstract public function getByteCount(array $characters, int $index, int $count): int;
}