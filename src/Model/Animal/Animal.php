<?php

declare(strict_types=1);

namespace Zopg\Model\Animal;

use Zopg\Model\Animal as AnimalInterface;
use Zopg\Storage\Animal as AnimalStorage;

final class Animal extends AbstractAnimal implements AnimalInterface
{
    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public static function fromArray(array $animal)
    {
        $identifier = $animal[AnimalStorage::FIELD_VALUE] ?? 0;
        $name = $animal[AnimalStorage::FIELD_NAME] ?? '';

        return new self($identifier, $name);
    }
}