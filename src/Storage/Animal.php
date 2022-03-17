<?php

declare(strict_types=1);

namespace Zopg\Storage;

final class Animal
{
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    public const FIELDS = [
        self::FIELD_NAME,
        self::FIELD_VALUE
    ];

    public const RICKY = [
        self::FIELD_NAME => 'Ricky',
        self::FIELD_VALUE => '0x0b'
    ];

    public const DIMITRI = [
        self::FIELD_NAME => 'Dimitri',
        self::FIELD_VALUE => '0x0c'
    ];

    public const MOOSH = [
        self::FIELD_NAME => 'Moosh',
        self::FIELD_VALUE => '0x0d'
    ];

    public const COLLECTION = [
        self::RICKY,
        self::DIMITRI,
        self::MOOSH
    ];
}