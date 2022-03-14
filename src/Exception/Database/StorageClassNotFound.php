<?php

declare(strict_types=1);

namespace Zopg\Exception\Database;

use Exception;

use function sprintf;

final class StorageClassNotFound extends Exception
{
    public static function forClassName(string $className): self
    {
        return new self(sprintf('Storage class not found for class with name: [%s]', $className));
    }
}