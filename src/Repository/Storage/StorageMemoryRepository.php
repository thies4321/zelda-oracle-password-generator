<?php

declare(strict_types=1);

namespace Zopg\Repository\Storage;

use Zopg\Model\Memory;
use Zopg\Repository\AbstractRepository;
use Zopg\Repository\MemoryRepository;
use Zopg\Storage\Memory as MemoryStorage;

final class StorageMemoryRepository extends AbstractRepository implements MemoryRepository
{
    public function getByIdentifier(int $identifier): ?Memory
    {
        $data = $this->databaseDriver->fetchOne([
            'class' => MemoryStorage::class,
            'field' => MemoryStorage::FIELD_IDENTIFIER,
            'value' => $identifier
        ]);

        if (empty($data)) {
            return null;
        }

        return Memory\Memory::fromArray($data);
    }

    public function getByName(string $name): ?Memory
    {
        $data = $this->databaseDriver->fetchOne([
            'class' => MemoryStorage::class,
            'field' => MemoryStorage::FIELD_NAME,
            'value' => $name
        ]);

        if (empty($data)) {
            return null;
        }

        return Memory\Memory::fromArray($data);
    }
}