<?php

declare(strict_types=1);

namespace Zopg\Repository\Storage;

use Zopg\Model\Ring;
use Zopg\Repository\AbstractRepository;
use Zopg\Repository\RingRepository;
use Zopg\Storage\Ring as RingStorage;

final class StorageRingRepository extends AbstractRepository implements RingRepository
{
    public function getByName(string $name): ?Ring
    {
        $data = $this->databaseDriver->fetchOne([
            'class' => RingStorage::class,
            'field' => RingStorage::FIELD_NAME,
            'value' => $name
        ]);

        if (empty($data)) {
            return null;
        }

        return Ring\Ring::fromArray($data);
    }

    public function getByDescription(string $description): ?Ring
    {
        $data = $this->databaseDriver->fetchOne([
            'class' => RingStorage::class,
            'field' => RingStorage::FIELD_DESCRIPTION,
            'value' => $description
        ]);

        if (empty($data)) {
            return null;
        }

        return Ring\Ring::fromArray($data);
    }

    public function getByValue(string $value): ?Ring
    {
        $data = $this->databaseDriver->fetchOne([
            'class' => RingStorage::class,
            'field' => RingStorage::FIELD_VALUE,
            'value' => $value
        ]);

        if (empty($data)) {
            return null;
        }

        return Ring\Ring::fromArray($data);
    }
}