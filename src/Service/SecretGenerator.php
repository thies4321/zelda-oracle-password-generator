<?php

declare(strict_types=1);

namespace Zopg\Service;

abstract class SecretGenerator
{
    public const GAME_AGES = 0;
    public const GAME_SEASONS = 1;

    public const GAME_REGION_JP = 'JP';
    public const GAME_REGION_USA = 'USA';

    protected const GAME_REGIONS = [
        self::GAME_REGION_JP => 0,
        self::GAME_REGION_USA => 1
    ];

    protected const CIPHERS = [
        self::GAME_REGIONS[self::GAME_REGION_JP] => [
            '0x31', '0x09', '0x29', '0x3b', '0x18', '0x3c', '0x17', '0x33',
            '0x35', '0x01', '0x0b', '0x0a', '0x30', '0x21', '0x2d', '0x25',
            '0x20', '0x3a', '0x2f', '0x1e', '0x39', '0x19', '0x2a', '0x06',
            '0x04', '0x15', '0x23', '0x2e', '0x32', '0x28', '0x13', '0x34',
            '0x10', '0x0d', '0x3f', '0x1a', '0x37', '0x0f', '0x3e', '0x36',
            '0x38', '0x02', '0x16', '0x3d', '0x2c', '0x0e', '0x1b', '0x12'
        ],
        self::GAME_REGIONS[self::GAME_REGION_USA] => [
            21, 35, 46,  4, 13, 63, 26, 16,
            58, 47, 30, 32, 15, 62, 54, 55,
            9, 41, 59, 49,  2, 22, 61, 56,
            40, 19, 52, 50,  1, 11, 10, 53,
            14, 27, 18, 44, 33, 45, 37, 48,
            25, 42,  6, 57, 60, 23, 51, 24
        ]
    ];

    protected int $length;

    protected int $gameId;

    protected int $region;

    public function __construct(int $length, int $gameId, int $region)
    {
        $this->length = $length;
        $this->gameId = $gameId;
        $this->region = $region;
    }
}