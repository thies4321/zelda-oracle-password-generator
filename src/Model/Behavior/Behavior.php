<?php

declare(strict_types=1);

namespace Zopg\Model\Behavior;

use Zopg\Model\Behavior as BehaviorInterface;
use Zopg\Storage\Behavior as BehaviorStorage;

final class Behavior extends AbstractBehavior implements BehaviorInterface
{
    public function __construct(int $identifier, string $name)
    {
        $this->identifier = $identifier;
        $this->name = $name;
    }

    public static function fromArray(array $behavior): self
    {
        $identifier = $behavior[BehaviorStorage::FIELD_IDENTIFIER] ?? 0;
        $name = $behavior[BehaviorStorage::FIELD_NAME] ?? '';

        return new self($identifier, $name);
    }
}