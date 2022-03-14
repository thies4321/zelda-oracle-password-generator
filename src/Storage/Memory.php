<?php

declare(strict_types=1);

namespace Zopg\Storage;

final class Memory
{
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_NAME = 'name';

    public const FIELDS = [
        self::FIELD_IDENTIFIER,
        self::FIELD_NAME
    ];

    public const CLOCK_SHOP_KING_ZORA = [
        self::FIELD_IDENTIFIER => 0,
        self::FIELD_NAME => 'ClockShopKingZora'
    ];

    public const GRAVEYARD_FAIRY = [
        self::FIELD_IDENTIFIER => 1,
        self::FIELD_NAME => 'GraveyardFairy'
    ];

    public const SUBROSIAN_TROY = [
        self::FIELD_IDENTIFIER => 2,
        self::FIELD_NAME => 'SubrosianTroy'
    ];

    public const DIVER_PLEN = [
        self::FIELD_IDENTIFIER => 3,
        self::FIELD_NAME => 'DiverPlen'
    ];

    public const SMITH_LIBRARY = [
        self::FIELD_IDENTIFIER => 4,
        self::FIELD_NAME => 'SmithLibrary'
    ];

    public const PIRATE_TOKAY = [
        self::FIELD_IDENTIFIER => 5,
        self::FIELD_NAME => 'PirateTokay'
    ];

    public const TEMPLE_MAMAMU = [
        self::FIELD_IDENTIFIER => 6,
        self::FIELD_NAME => 'TempleMamamu'
    ];

    public const DEKU_TINGLE = [
        self::FIELD_IDENTIFIER => 7,
        self::FIELD_NAME => 'DekuTingle'
    ];

    public const BIGGORON_ELDER = [
        self::FIELD_IDENTIFIER => 8,
        self::FIELD_NAME => 'BiggoronElder'
    ];

    public const RUUL_SYMMETRY = [
        self::FIELD_IDENTIFIER => 9,
        self::FIELD_NAME => 'RuulSymmetry'
    ];

    public const COLLECTION = [
        self::CLOCK_SHOP_KING_ZORA,
        self::GRAVEYARD_FAIRY,
        self::SUBROSIAN_TROY,
        self::DIVER_PLEN,
        self::SMITH_LIBRARY,
        self::PIRATE_TOKAY,
        self::TEMPLE_MAMAMU,
        self::DEKU_TINGLE,
        self::BIGGORON_ELDER,
        self::RUUL_SYMMETRY
    ];
}