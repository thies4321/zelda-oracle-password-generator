<?php

namespace Zopg\Exception\Database;

use Exception;

use function sprintf;

final class FieldNotFound extends Exception
{
    public static function forStorageClassAndFieldName(string $storageClass, string $fieldName): self
    {
        return new self(sprintf('Field [%s] not found for storage class [%s]', $fieldName, $storageClass));
    }
}