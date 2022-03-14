<?php

declare(strict_types=1);

namespace Zopg\Model;

interface Behavior
{
    public function getIdentifier(): int;

    public function getName(): string;
}