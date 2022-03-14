<?php

declare(strict_types=1);

namespace Zopg\Model\Behavior;

use Zopg\Model\Behavior;

abstract class AbstractBehavior implements Behavior
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