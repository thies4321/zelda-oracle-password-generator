<?php

declare(strict_types=1);

namespace Zopg\Model;

interface Ring
{
    public function getName(): string;

    public function getDescription(): string;

    public function getValue(): string;
}