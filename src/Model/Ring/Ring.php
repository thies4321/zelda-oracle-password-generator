<?php

declare(strict_types=1);

namespace Zopg\Model\Ring;

use Zopg\Model\Ring as RingInterface;

final class Ring extends AbstractRing implements RingInterface
{
    public function __construct(string $name, string $description, string $value)
    {
        $this->name = $name;
        $this->description = $description;
        $this->value = $value;
    }
}