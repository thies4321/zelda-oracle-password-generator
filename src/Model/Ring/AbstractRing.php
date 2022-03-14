<?php

declare(strict_types=1);

namespace Zopg\Model\Ring;

abstract class AbstractRing implements \Zopg\Model\Ring
{
    protected string $name;

    protected string $description;

    protected string $value;

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}