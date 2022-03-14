<?php

declare(strict_types=1);

namespace Zopg\Model\Database;

interface DatabaseDriver
{
    public function fetchOne(array $queryData): array;

    public function fetchAll(array $queryData): array;
}