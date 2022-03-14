<?php

declare(strict_types=1);

namespace Zopg\Model\Memory;

use Zopg\Model\Memory as MemoryInterface;
use Zopg\Storage\Memory as MemoryStorage;

final class Memory extends AbstractMemory implements MemoryInterface
{
    public function __construct(int $identifier, string $name)
    {
        $this->identifier = $identifier;
        $this->name = $name;
    }

    public static function fromArray(array $behavior): self
    {
        $identifier = $behavior[MemoryStorage::FIELD_IDENTIFIER] ?? 0;
        $name = $behavior[MemoryStorage::FIELD_NAME] ?? '';

        return new self($identifier, $name);
    }
}