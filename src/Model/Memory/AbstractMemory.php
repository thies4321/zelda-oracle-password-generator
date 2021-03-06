<?php

declare(strict_types=1);

namespace Zopg\Model\Memory;

use Zopg\Model\Memory;

abstract class AbstractMemory implements Memory
{
    protected int $identifier;

    protected string $name;

    public function getIdentifier(): int
    {
        return $this->identifier;
    }

    public function getName(): string
    {
        return $this->name;
    }
}