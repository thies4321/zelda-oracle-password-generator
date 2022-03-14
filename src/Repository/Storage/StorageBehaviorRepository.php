<?php

declare(strict_types=1);

namespace Zopg\Repository\Storage;

use Zopg\Model\Behavior;
use Zopg\Repository\AbstractRepository;
use Zopg\Repository\BehaviorRepository;
use Zopg\Storage\Behavior as BehaviorStorage;

final class StorageBehaviorRepository extends AbstractRepository implements BehaviorRepository
{
    public function getByIdentifier(int $identifier): ?Behavior
    {
        $data = $this->databaseDriver->fetchOne([
            'class' => BehaviorStorage::class,
            'field' => BehaviorStorage::FIELD_IDENTIFIER,
            'value' => $identifier
        ]);

        if (empty($data)) {
            return null;
        }

        return Behavior\Behavior::fromArray($data);
    }

    public function getByName(string $name): ?Behavior
    {
        $data = $this->databaseDriver->fetchOne([
            'class' => BehaviorStorage::class,
            'field' => BehaviorStorage::FIELD_NAME,
            'value' => $name
        ]);

        if (empty($data)) {
            return null;
        }

        return Behavior\Behavior::fromArray($data);
    }
}