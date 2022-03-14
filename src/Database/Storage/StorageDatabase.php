<?php

declare(strict_types=1);

namespace Zopg\Model\Database\Storage;

use Zopg\Exception\Database\FieldNotFound;
use Zopg\Exception\Database\QueryFieldNotProvided;
use Zopg\Exception\Database\StorageClassNotFound;
use Zopg\Model\Database\DatabaseDriver;
use function class_exists;

final class StorageDatabase implements DatabaseDriver
{
    /**
     * @throws FieldNotFound
     * @throws QueryFieldNotProvided
     * @throws StorageClassNotFound
     */
    public function fetchOne(array $queryData): array
    {
        $storageClass = $queryData['class'] ?? null;

        if ($storageClass === null) {
            throw QueryFieldNotProvided::forFieldName('class');
        }

        if (! class_exists($storageClass)) {
            throw StorageClassNotFound::forClassName($storageClass);
        }

        $fieldName = $queryData['field'] ?? null;

        if ($fieldName === null) {
            throw QueryFieldNotProvided::forFieldName('field');
        }

        $fieldFound = false;

        foreach ($storageClass::FIELDS as $field) {
            if ($field === $fieldName) {
                $fieldFound = true;
                break;
            }
        }

        if ($fieldFound === false) {
            throw FieldNotFound::forStorageClassAndFieldName($storageClass, $fieldName);
        }

        $fieldValue = $queryData['value'] ?? null;

        if ($fieldValue === null) {
            throw QueryFieldNotProvided::forFieldName('value');
        }

        foreach ($storageClass::COLLECTION as $collectionEntity) {
            if ($collectionEntity[$fieldName] === $fieldValue) {
                return $collectionEntity;
            }
        }

        return [];
    }

    public function fetchAll(array $queryData): array
    {
        $storageClass = $queryData['class'] ?? null;

        if ($storageClass === null) {
            throw QueryFieldNotProvided::forFieldName('class');
        }

        if (! class_exists($storageClass)) {
            throw StorageClassNotFound::forClassName($storageClass);
        }

        $fieldName = $queryData['field'] ?? null;

        if ($fieldName === null) {
            throw QueryFieldNotProvided::forFieldName('field');
        }

        $fieldFound = false;

        foreach ($storageClass::FIELDS as $field) {
            if ($field === $fieldName) {
                $fieldFound = true;
                break;
            }
        }

        if ($fieldFound === false) {
            throw FieldNotFound::forStorageClassAndFieldName($storageClass, $fieldName);
        }

        $fieldValue = $queryData['value'] ?? null;

        if ($fieldValue === null) {
            throw QueryFieldNotProvided::forFieldName('value');
        }

        $result = [];

        foreach ($storageClass::COLLECTION as $collectionEntity) {
            if ($collectionEntity[$fieldName] === $fieldValue) {
                $result[] = $collectionEntity;
            }
        }

        return $result;
    }
}