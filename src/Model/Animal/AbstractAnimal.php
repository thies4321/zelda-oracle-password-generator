<?php

declare(strict_types=1);

namespace Zopg\Model\Animal;

use Zopg\Model\Animal;

abstract class AbstractAnimal implements Animal
{
    protected string $name;

    protected string $value;

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}