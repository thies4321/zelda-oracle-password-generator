<?php

declare(strict_types=1);

namespace Zopg\Repository;

use Zopg\Model\Database\DatabaseDriver;
use Zopg\Model\Database\Storage\StorageDatabase;

abstract class AbstractRepository
{
    protected DatabaseDriver $databaseDriver;

    public function __construct(DatabaseDriver $databaseDriver = null)
    {
        $this->databaseDriver = $databaseDriver ?? new StorageDatabase();
    }
}