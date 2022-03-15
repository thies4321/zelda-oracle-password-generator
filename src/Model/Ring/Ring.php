<?php

declare(strict_types=1);

namespace Zopg\Model\Ring;

use Zopg\Model\Ring as RingInterface;
use Zopg\Storage\Ring as RingStorage;

final class Ring extends AbstractRing implements RingInterface
{
    public function __construct(string $name, string $description, string $value)
    {
        $this->name = $name;
        $this->description = $description;
        $this->value = $value;
    }

    public static function fromArray(array $ring): self
    {
        $name = $ring[RingStorage::FIELD_NAME] ?? '';
        $description = $ring[RingStorage::FIELD_DESCRIPTION] ?? '';
        $value = $ring[RingStorage::FIELD_VALUE] ?? '';

        return new self($name, $description, $value);
    }
}