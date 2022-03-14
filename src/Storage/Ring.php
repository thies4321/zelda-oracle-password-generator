<?php

declare(strict_types=1);

namespace Zopg\Storage;

final class Ring
{
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_VALUE = 'value';

    public const FIELDS = [
        self::FIELD_NAME,
        self::FIELD_DESCRIPTION,
        self::FIELD_VALUE
    ];

    public const FRIENDSHIP_RING = [
        self::FIELD_NAME => 'Friendship Ring',
        self::FIELD_DESCRIPTION => 'Symbol of a meeting',
        self::FIELD_VALUE => '0x1'
    ];

    public const POWER_RING_L1 = [
        self::FIELD_NAME => 'Power Ring L-1',
        self::FIELD_DESCRIPTION => 'Sword damage ▲\nDamage taken ▲',
        self::FIELD_VALUE => '0x2'
    ];

    public const POWER_RING_L2 = [
        self::FIELD_NAME => 'Power Ring L-2',
        self::FIELD_DESCRIPTION => 'Sword damage ▲▲\nDamage taken ▲▲',
        self::FIELD_VALUE => '0x4'
    ];

    public const COLLECTION = [
        self::FRIENDSHIP_RING,
        self::POWER_RING_L1,
        self::POWER_RING_L2
    ];
}