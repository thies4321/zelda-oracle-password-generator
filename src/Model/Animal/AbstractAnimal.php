<?php

declare(strict_types=1);

namespace Zopg\Model\Animal;

use Zopg\Model\Animal;

abstract class AbstractAnimal implements Animal
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