<?php

declare(strict_types=1);

namespace Zopg\Repository\Storage;

use Zopg\Exception\Database\FieldNotFound;
use Zopg\Exception\Database\QueryFieldNotProvided;
use Zopg\Exception\Database\StorageClassNotFound;
use Zopg\Model\Animal;
use Zopg\Repository\AbstractRepository;
use Zopg\Repository\AnimalRepository;
use Zopg\Storage\Animal as AnimalStorage;

final class StorageAnimalRepository extends AbstractRepository implements AnimalRepository
{
    /**
     * @throws FieldNotFound
     * @throws QueryFieldNotProvided
     * @throws StorageClassNotFound
     */
    public function getByIdentifier(int $identifier): ?Animal
    {
        $data = $this->databaseDriver->fetchOne([
            'class' => AnimalStorage::class,
            'field' => AnimalStorage::FIELD_IDENTIFIER,
            'value' => $identifier
        ]);

        if (empty($data)) {
            return null;
        }

        return Animal\Animal::fromArray($data);
    }

    /**
     * @throws FieldNotFound
     * @throws QueryFieldNotProvided
     * @throws StorageClassNotFound
     */
    public function getByName(string $name): ?Animal
    {
        $data = $this->databaseDriver->fetchOne([
            'class' => AnimalStorage::class,
            'field' => AnimalStorage::FIELD_NAME,
            'value' => $name
        ]);

        if (empty($data)) {
            return null;
        }

        return Animal\Animal::fromArray($data);
    }
}