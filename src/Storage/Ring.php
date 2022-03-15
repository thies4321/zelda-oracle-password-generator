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

    public const POWER_RING_L3 = [
        self::FIELD_NAME => 'Power Ring L-3',
        self::FIELD_DESCRIPTION => 'Sword damage ▲▲▲\nDamage taken ▲▲▲',
        self::FIELD_VALUE => '0x8'
    ];

    public const ARMOR_RING_L1 = [
        self::FIELD_NAME => 'Armor Ring L-1',
        self::FIELD_DESCRIPTION => 'Sword Damage ▼\nDamage taken ▼',
        self::FIELD_VALUE => '0x10'
    ];

    public const ARMOR_RING_L2 = [
        self::FIELD_NAME => 'Armor Ring L-2',
        self::FIELD_DESCRIPTION => 'Sword Damage ▼▼\nDamage taken ▼▼',
        self::FIELD_VALUE => '0x20'
    ];

    public const ARMOR_RING_L3 = [
        self::FIELD_NAME => 'Armor Ring L-3',
        self::FIELD_DESCRIPTION => 'Sword Damage ▼▼▼\nDamage taken ▼▼▼',
        self::FIELD_VALUE => '0x40'
    ];

    public const RED_RING = [
        self::FIELD_NAME => 'Red Ring',
        self::FIELD_DESCRIPTION => 'Sword Damage x2',
        self::FIELD_VALUE => '0x80'
    ];

    public const BLUE_RING = [
        self::FIELD_NAME => 'Blue Ring',
        self::FIELD_DESCRIPTION => 'Damage taken reduced by 1/2',
        self::FIELD_VALUE => '0x100'
    ];

    public const GREEN_RING = [
        self::FIELD_NAME => 'Green Ring',
        self::FIELD_DESCRIPTION => 'Damage taken down by 25%\nSword damage up by 50%',
        self::FIELD_VALUE => '0x200'
    ];

    public const CURSED_RING = [
        self::FIELD_NAME => 'Cursed Ring',
        self::FIELD_DESCRIPTION => '1/2 sword damage\nx2 damage taken',
        self::FIELD_VALUE => '0x400'
    ];

    public const EXPERTS_RING = [
        self::FIELD_NAME => "Expert's Ring",
        self::FIELD_DESCRIPTION => 'Punch when unequipped',
        self::FIELD_VALUE => '0x800'
    ];

    public const BLAST_RING = [
        self::FIELD_NAME => 'Blast Ring',
        self::FIELD_DESCRIPTION => 'Bomb damage ▲',
        self::FIELD_VALUE => '0x1000'
    ];

    public const RANG_RING = [
        self::FIELD_NAME => 'Rang Ring L-1',
        self::FIELD_DESCRIPTION => 'Boomerang damage ▲',
        self::FIELD_VALUE => '0x2000'
    ];

    public const GBA_TIME_RING = [
        self::FIELD_NAME => 'GBA Time Ring',
        self::FIELD_DESCRIPTION => 'Life Advanced!',
        self::FIELD_VALUE => '0x4000'
    ];

    public const MAPLES_RING = [
        self::FIELD_NAME => "Maple's Ring",
        self::FIELD_DESCRIPTION => 'Maple meetings ▲',
        self::FIELD_VALUE => '0x8000'
    ];

    public const STEADFAST_RING = [
        self::FIELD_NAME => 'Steadfast Ring',
        self::FIELD_DESCRIPTION => 'Get knocked back less',
        self::FIELD_VALUE => '0x10000'
    ];

    public const PEGASUS_RING = [
        self::FIELD_NAME => 'Pegasus Ring',
        self::FIELD_DESCRIPTION => 'Lengthen Pegasus Seed effect',
        self::FIELD_VALUE => '0x20000'
    ];

    public const TOSS_RING = [
        self::FIELD_NAME => 'Toss Ring',
        self::FIELD_DESCRIPTION => 'Throwing distance ▲',
        self::FIELD_VALUE => '0x40000'
    ];

    public const HEART_RING_L1 = [
        self::FIELD_NAME => 'Heart Ring L-1',
        self::FIELD_DESCRIPTION => 'Slowly recover lost Hearts',
        self::FIELD_VALUE => '0x80000'
    ];

    public const HEART_RING_L2 = [
        self::FIELD_NAME => 'Heart Ring L-2',
        self::FIELD_DESCRIPTION => 'Recover lost Hearts',
        self::FIELD_VALUE => '0x100000'
    ];

    public const SWIMMERS_RING = [
        self::FIELD_NAME => "Swimmer's Ring",
        self::FIELD_DESCRIPTION => 'Swimming speed ▲',
        self::FIELD_VALUE => '0x200000'
    ];

    public const CHARGE_RING = [
        self::FIELD_NAME => 'Charge Ring',
        self::FIELD_DESCRIPTION => 'Spin Attack charges quickly',
        self::FIELD_VALUE => '0x400000'
    ];

    public const LIGHT_RING_L1 = [
        self::FIELD_NAME => 'Light Ring L-1',
        self::FIELD_DESCRIPTION => 'Sword beams at -2 Hearts',
        self::FIELD_VALUE => '0x800000'
    ];

    public const LIGHT_RING_L2 = [
        self::FIELD_NAME => 'Light Ring L-2',
        self::FIELD_DESCRIPTION => 'Sword beams at -3 Hearts',
        self::FIELD_VALUE => '0x1000000'
    ];

    public const BOMBERS_RING = [
        self::FIELD_NAME => "Bomber's Ring",
        self::FIELD_DESCRIPTION => 'Set two Bombs at once',
        self::FIELD_VALUE => '0x2000000'
    ];

    public const GREEN_LUCK_RING = [
        self::FIELD_NAME => 'Green Luck Ring',
        self::FIELD_DESCRIPTION => '1/2 damage from traps',
        self::FIELD_VALUE => '0x4000000'
    ];

    public const BLUE_LUCK_RING = [
        self::FIELD_NAME => 'Blue Luck Ring',
        self::FIELD_DESCRIPTION => '1/2 damage from beams',
        self::FIELD_VALUE => '0x8000000'
    ];

    public const GOLD_LUCK_RING = [
        self::FIELD_NAME => 'Gold Luck Ring',
        self::FIELD_DESCRIPTION => '1/2 damage from falls',
        self::FIELD_VALUE => '0x10000000'
    ];

    public const RED_LUCK_RING = [
        self::FIELD_NAME => 'Red Luck Ring',
        self::FIELD_DESCRIPTION => '1/2 damage from spiked floors',
        self::FIELD_VALUE => '0x20000000'
    ];

    public const GREEN_HOLY_RING = [
        self::FIELD_NAME => 'Green Holy Ring',
        self::FIELD_DESCRIPTION => 'No damage from electricity',
        self::FIELD_VALUE => '0x40000000'
    ];

    public const BLUE_HOLY_RING = [
        self::FIELD_NAME => 'Blue Holy Ring',
        self::FIELD_DESCRIPTION => "No damage from Zora's fire",
        self::FIELD_VALUE => '0x80000000'
    ];

    public const RED_HOLY_RING = [
        self::FIELD_NAME => 'Red Holy Ring',
        self::FIELD_DESCRIPTION => 'No damage from small rocks',
        self::FIELD_VALUE => '0x100000000'
    ];

    public const SNOWSHOE_RING = [
        self::FIELD_NAME => 'Snowshoe Ring',
        self::FIELD_DESCRIPTION => 'No sliding on ice',
        self::FIELD_VALUE => '0x200000000'
    ];

    public const ROCS_RING = [
        self::FIELD_NAME => "Roc's Ring",
        self::FIELD_DESCRIPTION => "Cracked floors don't crumble",
        self::FIELD_VALUE => '0x400000000'
    ];

    public const QUICKSAND_RING = [
        self::FIELD_NAME => 'Quicksand Ring',
        self::FIELD_DESCRIPTION => 'No sinking in quicksand',
        self::FIELD_VALUE => '0x800000000'
    ];

    public const RED_JOY_RING = [
        self::FIELD_NAME => 'Red Joy Ring',
        self::FIELD_DESCRIPTION => 'Beasts drop double Rupees',
        self::FIELD_VALUE => '0x1000000000'
    ];

    public const BLUE_JOY_RING = [
        self::FIELD_NAME => 'Blue Joy Ring',
        self::FIELD_DESCRIPTION => 'Beasts drop double Hearts',
        self::FIELD_VALUE => '0x2000000000'
    ];

    public const GOLD_JOY_RING = [
        self::FIELD_NAME => 'Gold Joy Ring',
        self::FIELD_DESCRIPTION => 'Find double items',
        self::FIELD_VALUE => '0x4000000000'
    ];

    public const GREEN_JOY_RING = [
        self::FIELD_NAME => 'Green Joy Ring',
        self::FIELD_DESCRIPTION => 'Find double Ore Chunks',
        self::FIELD_VALUE => '0x8000000000'
    ];

    public const DISCOVERY_RING = [
        self::FIELD_NAME => 'Discovery Ring',
        self::FIELD_DESCRIPTION => 'Sense soft earth nearby',
        self::FIELD_VALUE => '0x10000000000'
    ];

    public const RANG_RING_L2 = [
        self::FIELD_NAME => 'Rang Ring L-2',
        self::FIELD_DESCRIPTION => 'Boomerang damage ▲▲',
        self::FIELD_VALUE => '0x20000000000'
    ];

    public const OCTO_RING = [
        self::FIELD_NAME => 'Octo Ring',
        self::FIELD_DESCRIPTION => 'Become an Octorok',
        self::FIELD_VALUE => '0x40000000000'
    ];

    public const MOBLIN_RING = [
        self::FIELD_NAME => 'Moblin Ring',
        self::FIELD_DESCRIPTION => 'Become a Moblin',
        self::FIELD_VALUE => '0x80000000000'
    ];

    public const LIKE_LIKE_RING = [
        self::FIELD_NAME => 'Like Like Ring',
        self::FIELD_DESCRIPTION => 'Become a Like-Like',
        self::FIELD_VALUE => '0x100000000000'
    ];

    public const SUBROSIAN_RING = [
        self::FIELD_NAME => 'Subrosian Ring',
        self::FIELD_DESCRIPTION => 'Become a Subrosian',
        self::FIELD_VALUE => '0x200000000000'
    ];

    public const FIRST_GEN_RING = [
        self::FIELD_NAME => 'First Gen Ring',
        self::FIELD_DESCRIPTION => 'Become something',
        self::FIELD_VALUE => '0x400000000000'
    ];

    public const SPIN_RING = [
        self::FIELD_NAME => 'Spin Ring',
        self::FIELD_DESCRIPTION => 'Double Spin Attack',
        self::FIELD_VALUE => '0x800000000000'
    ];

    public const BOMBPROOF_RING = [
        self::FIELD_NAME => 'Bombproof Ring',
        self::FIELD_DESCRIPTION => 'No damage from your own Bombs',
        self::FIELD_VALUE => '0x1000000000000'
    ];

    public const ENERGY_RING = [
        self::FIELD_NAME => 'Energy Ring',
        self::FIELD_DESCRIPTION => 'Beam replaces Spin Attack',
        self::FIELD_VALUE => '0x2000000000000'
    ];

    public const DOUBLE_EDGE_RING = [
        self::FIELD_NAME => 'Dbl. Edge Ring',
        self::FIELD_DESCRIPTION => 'Sword damage ▲ but you get hurt',
        self::FIELD_VALUE => '0x4000000000000'
    ];

    public const GBA_NATURE_RING = [
        self::FIELD_NAME => 'GBA Nature Ring',
        self::FIELD_DESCRIPTION => 'Life Advanced!',
        self::FIELD_VALUE => '0x8000000000000'
    ];

    public const SLAYERS_RING = [
        self::FIELD_NAME => "Slayer's Ring",
        self::FIELD_DESCRIPTION => '1000 beasts slain',
        self::FIELD_VALUE => '0x10000000000000'
    ];

    public const RUPEE_RING = [
        self::FIELD_NAME => 'Rupee Ring',
        self::FIELD_DESCRIPTION => '10;000 Rupees collected',
        self::FIELD_VALUE => '0x20000000000000'
    ];

    public const VICTORY_RING = [
        self::FIELD_NAME => 'Victory Ring',
        self::FIELD_DESCRIPTION => 'The Evil King Ganon defeated',
        self::FIELD_VALUE => '0x40000000000000'
    ];

    public const SIGN_RING = [
        self::FIELD_NAME => 'Sign Ring',
        self::FIELD_DESCRIPTION => '100 signs broken',
        self::FIELD_VALUE => '0x80000000000000'
    ];

    public const HUNDREDTH_RING = [
        self::FIELD_NAME => '100th Ring',
        self::FIELD_DESCRIPTION => '100 rings appraised',
        self::FIELD_VALUE => '0x100000000000000'
    ];

    public const WHISP_RING = [
        self::FIELD_NAME => 'Whisp Ring',
        self::FIELD_DESCRIPTION => 'No effect from jinxes',
        self::FIELD_VALUE => '0x200000000000000'
    ];

    public const GASHA_RING = [
        self::FIELD_NAME => 'Gasha Ring',
        self::FIELD_DESCRIPTION => 'Grow great Gasha Trees',
        self::FIELD_VALUE => '0x400000000000000'
    ];

    public const PEACE_RING = [
        self::FIELD_NAME => 'Peace Ring',
        self::FIELD_DESCRIPTION => 'No explosion if holding Bomb',
        self::FIELD_VALUE => '0x800000000000000'
    ];

    public const ZORA_RING = [
        self::FIELD_NAME => 'Zora Ring',
        self::FIELD_DESCRIPTION => 'Dive without breathing',
        self::FIELD_VALUE => '0x1000000000000000'
    ];

    public const FIST_RING = [
        self::FIELD_NAME => 'Fist Ring',
        self::FIELD_DESCRIPTION => 'Punch when not equipped',
        self::FIELD_VALUE => '0x2000000000000000'
    ];

    public const WHIMSICAL_RING = [
        self::FIELD_NAME => 'Whimsical Ring',
        self::FIELD_DESCRIPTION => 'Sword damage ▼ Sometimes deadly',
        self::FIELD_VALUE => '0x4000000000000000'
    ];

    public const PROTECTION_RING = [
        self::FIELD_NAME => 'Protection Ring',
        self::FIELD_DESCRIPTION => 'Damage taken is always one Heart',
        self::FIELD_VALUE => '0x8000000000000000'
    ];

    public const COLLECTION = [
        self::FRIENDSHIP_RING,
        self::POWER_RING_L1,
        self::POWER_RING_L2,
        self::POWER_RING_L3,
        self::ARMOR_RING_L1,
        self::ARMOR_RING_L2,
        self::ARMOR_RING_L3,
        self::RED_RING,
        self::BLUE_RING,
        self::GREEN_RING,
        self::CURSED_RING,
        self::EXPERTS_RING,
        self::BLAST_RING,
        self::RANG_RING,
        self::GBA_TIME_RING,
        self::MAPLES_RING,
        self::STEADFAST_RING,
        self::PEGASUS_RING,
        self::TOSS_RING,
        self::HEART_RING_L1,
        self::HEART_RING_L2,
        self::SWIMMERS_RING,
        self::CHARGE_RING,
        self::LIGHT_RING_L1,
        self::LIGHT_RING_L2,
        self::BOMBERS_RING,
        self::GREEN_LUCK_RING,
        self::BLUE_LUCK_RING,
        self::GOLD_LUCK_RING,
        self::RED_LUCK_RING,
        self::GREEN_HOLY_RING,
        self::BLUE_HOLY_RING,
        self::RED_HOLY_RING,
        self::SNOWSHOE_RING,
        self::ROCS_RING,
        self::QUICKSAND_RING,
        self::RED_JOY_RING,
        self::BLUE_JOY_RING,
        self::GOLD_JOY_RING,
        self::GREEN_JOY_RING,
        self::DISCOVERY_RING,
        self::RANG_RING_L2,
        self::OCTO_RING,
        self::MOBLIN_RING,
        self::LIKE_LIKE_RING,
        self::SUBROSIAN_RING,
        self::FIRST_GEN_RING,
        self::SPIN_RING,
        self::BOMBPROOF_RING,
        self::ENERGY_RING,
        self::DOUBLE_EDGE_RING,
        self::GBA_NATURE_RING,
        self::SLAYERS_RING,
        self::RUPEE_RING,
        self::VICTORY_RING,
        self::SIGN_RING,
        self::HUNDREDTH_RING,
        self::WHISP_RING,
        self::GASHA_RING,
        self::PEACE_RING,
        self::ZORA_RING,
        self::FIST_RING,
        self::WHIMSICAL_RING
    ];
}