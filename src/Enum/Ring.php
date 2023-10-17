<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Enum;

enum Ring: int
{
    case None = 0;
    case All = 0xFFFFFFFFFFFFFFFF;
    case FriendshipRing = 0x1;
    case PowerRingL1 = 0x2;
    case PowerRingL2 = 0x4;
    case PowerRingL3 = 0x8;
    case ArmorRingL1 = 0x10;
    case ArmorRingL2 = 0x20;
    case ArmorRingL3 = 0x40;
    case RedRing = 0x80;
    case BlueRing = 0x100;
    case GreenRing = 0x200;
    case CursedRing = 0x400;
    case ExpertsRing = 0x800;
    case BlastRing = 0x1000;
    case RangRingL1 = 0x2000;

    public function getName(): string
    {
        return match ($this) {
            self::None => 'None',
            self::All => 'All',
            self::FriendshipRing => 'Friendship Ring',
            self::PowerRingL1 => 'Power Ring L-1',
            self::PowerRingL2 => 'Power Ring L-2',
            self::PowerRingL3 => 'Power Ring L-3',
            self::ArmorRingL1 => 'Armor Ring L-1',
            self::ArmorRingL2 => 'Armor Ring L-2',
            self::ArmorRingL3 => 'Armor Ring L-3',
            self::RedRing => 'Red Ring',
            self::BlueRing => 'Blue Ring',
            self::GreenRing => 'Green Ring',
            self::CursedRing => 'Cursed Ring',
            self::ExpertsRing => 'Expert\'s Ring',
            self::BlastRing => 'Blast Ring',
            self::RangRingL1 => 'Rang Ring L-1',
        };
    }

    public function getDescription(): string
    {
        return match ($this) {
            self::None => 'None',
            self::All => 'All',
            self::FriendshipRing => 'Symbol of a meeting',
            self::PowerRingL1 => sprintf('Sword damage ▲%sDamage taken ▲', PHP_EOL),
            self::PowerRingL2 => sprintf('Sword damage ▲▲%sDamage taken ▲▲', PHP_EOL),
            self::PowerRingL3 => sprintf('Sword damage ▲▲▲%sDamage taken ▲▲▲', PHP_EOL),
            self::ArmorRingL1 => sprintf('Sword Damage ▼%sDamage taken ▼', PHP_EOL),
            self::ArmorRingL2 => sprintf('Sword Damage ▼▼%sDamage taken ▼▼', PHP_EOL),
            self::ArmorRingL3 => sprintf('Sword Damage ▼▼▼%sDamage taken ▼▼▼', PHP_EOL),
            self::RedRing => 'Sword Damage x2',
            self::BlueRing => 'Damage taken reduced by 1/2',
            self::GreenRing => sprintf('Damage taken down by 25%%%sSword damage up by 50%%', PHP_EOL),
            self::CursedRing => sprintf('1/2 sword damage%sx2 damage taken', PHP_EOL),
            self::ExpertsRing => 'Punch when unequipped',
            self::BlastRing => 'Bomb damage ▲',
            self::RangRingL1 => 'Boomerang damage ▲',
        };
    }
}
