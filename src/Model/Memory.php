<?php

declare(strict_types=1);

namespace Zopg\Model;

interface Memory
{
    public function getIdentifier(): int;

    public function getName(): string;
}