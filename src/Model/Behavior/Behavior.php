<?php

declare(strict_types=1);

namespace Zopg\Model\Behavior;

use Zopg\Model\Behavior as BehaviorInterface;

final class Behavior extends AbstractBehavior implements BehaviorInterface
{
    public function __construct(int $identifier, string $name)
    {
        $this->identifier = $identifier;
        $this->name = $name;
    }
}