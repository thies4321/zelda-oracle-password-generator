<?php

declare(strict_types=1);

namespace Zopg\Storage;

final class Behavior
{
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_NAME = 'name';

    public const FIELDS = [
        self::FIELD_IDENTIFIER,
        self::FIELD_NAME
    ];

    public const INFANT = [
        self::FIELD_IDENTIFIER => 0,
        self::FIELD_NAME => 'Infant'
    ];

    public const BOUNCY_A = [
        self::FIELD_IDENTIFIER => 1,
        self::FIELD_NAME => 'BouncyA'
    ];

    public const BOUNCY_B = [
        self::FIELD_IDENTIFIER => 2,
        self::FIELD_NAME => 'BouncyB'
    ];

    public const BOUNCY_C = [
        self::FIELD_IDENTIFIER => 3,
        self::FIELD_NAME => 'BouncyC'
    ];

    public const BOUNCY_D = [
        self::FIELD_IDENTIFIER => 4,
        self::FIELD_NAME => 'BouncyD'
    ];

    public const BOUNCY_E = [
        self::FIELD_IDENTIFIER => 5,
        self::FIELD_NAME => 'BouncyE'
    ];

    public const Shy_A = [
        self::FIELD_IDENTIFIER => 6,
        self::FIELD_NAME => 'ShyA'
    ];

    public const Shy_B = [
        self::FIELD_IDENTIFIER => 7,
        self::FIELD_NAME => 'ShyB'
    ];

    public const Shy_C = [
        self::FIELD_IDENTIFIER => 8,
        self::FIELD_NAME => 'ShyC'
    ];

    public const Shy_D = [
        self::FIELD_IDENTIFIER => 9,
        self::FIELD_NAME => 'ShyD'
    ];

    public const Shy_E = [
        self::FIELD_IDENTIFIER => 10,
        self::FIELD_NAME => 'ShyE'
    ];

    public const Hyper_A = [
        self::FIELD_IDENTIFIER => 11,
        self::FIELD_NAME => 'HyperA'
    ];

    public const Hyper_B = [
        self::FIELD_IDENTIFIER => 12,
        self::FIELD_NAME => 'HyperB'
    ];

    public const Hyper_C = [
        self::FIELD_IDENTIFIER => 13,
        self::FIELD_NAME => 'HyperC'
    ];

    public const Hyper_D = [
        self::FIELD_IDENTIFIER => 14,
        self::FIELD_NAME => 'HyperD'
    ];

    public const Hyper_E = [
        self::FIELD_IDENTIFIER => 15,
        self::FIELD_NAME => 'HyperE'
    ];

    public const COLLECTION = [
        self::INFANT,
        self::BOUNCY_A,
        self::BOUNCY_B,
        self::BOUNCY_C,
        self::BOUNCY_D,
        self::BOUNCY_E,
        self::Shy_A,
        self::Shy_B,
        self::Shy_C,
        self::Shy_D,
        self::Shy_E,
        self::Hyper_A,
        self::Hyper_B,
        self::Hyper_C,
        self::Hyper_D,
        self::Hyper_E
    ];
}