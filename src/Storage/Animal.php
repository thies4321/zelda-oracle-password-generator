<?php

declare(strict_types=1);

namespace Zopg\Storage;

final class Animal
{
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_NAME = 'name';

    public const FIELDS = [
        self::FIELD_IDENTIFIER,
        self::FIELD_NAME
    ];

    public const DIMITRI = [
        self::FIELD_IDENTIFIER => 4,
        self::FIELD_NAME => 'Dimitri'
    ];

    public const MOOSH = [
        self::FIELD_IDENTIFIER => 5,
        self::FIELD_NAME => 'Moosh'
    ];

    public const RICKY = [
        self::FIELD_IDENTIFIER => 3,
        self::FIELD_NAME => 'Ricky'
    ];

    public const COLLECTION = [
        self::DIMITRI,
        self::MOOSH,
        self::RICKY
    ];
}