<?php

declare(strict_types=1);

namespace Zopg\Model;

interface Animal
{
    public function getIdentifier(): int;

    public function getName(): string;
}