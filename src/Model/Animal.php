<?php

declare(strict_types=1);

namespace Zopg\Model;

interface Animal
{
    public function getName(): string;

    public function getValue(): string;
}