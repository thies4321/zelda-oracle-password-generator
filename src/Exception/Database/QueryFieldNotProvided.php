<?php

declare(strict_types=1);

namespace Zopg\Exception\Database;

use Exception;

use function sprintf;

final class QueryFieldNotProvided extends Exception
{
    public static function forFieldName(string $fieldName): self
    {
        return new self(sprintf('Field [%s] not provided', $fieldName));
    }
}