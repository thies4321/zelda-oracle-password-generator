<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Enum;

enum Rings: int
{
    const None = 0;
    const All = PHP_INT_MAX;

    const FriendshipRing = 0x1;
    const PowerRingL1 = 0x2;
    const PowerRingL2 = 0x4;
    const PowerRingL3 = 0x8;
    const ArmorRingL1 = 0x10;
    const ArmorRingL2 = 0x20;
    const ArmorRingL3 = 0x40;
    const RedRing = 0x80;
    const BlueRing = 0x100;
    const GreenRing = 0x200;
    const CursedRing = 0x400;
    const ExpertsRing = 0x800;
    const BlastRing = 0x1000;
    const RangRingL1 = 0x2000;
    const GBATimeRing = 0x4000;
    const MaplesRing = 0x8000;
    const SteadfastRing = 0x10000;
    const PegasusRing = 0x20000;
    const TossRing = 0x40000;
    const HeartRingL1 = 0x80000;
    const HeartRingL2 = 0x100000;
    const SwimmersRing = 0x200000;
    const ChargeRing = 0x400000;
    const LightRingL1 = 0x800000;
    const LightRingL2 = 0x1000000;
    const BombersRing = 0x2000000;
    const GreenLuckRing = 0x4000000;
    const BlueLuckRing = 0x8000000;
    const GoldLuckRing = 0x10000000;
    const RedLuckRing = 0x20000000;
    const GreenHolyRing = 0x40000000;
    const BlueHolyRing = 0x80000000;
    const RedHolyRing = 0x100000000;
    const SnowshoeRing = 0x200000000;
    const RocsRing = 0x400000000;
    const QuicksandRing = 0x800000000;
    const RedJoyRing = 0x1000000000;
    const BlueJoyRing = 0x2000000000;
    const GoldJoyRing = 0x4000000000;
    const GreenJoyRing = 0x8000000000;
    const DiscoveryRing = 0x10000000000;
    const RangRingL2 = 0x20000000000;
    const OctoRing = 0x40000000000;
    const MoblinRing = 0x80000000000;
    const LikeLikeRing = 0x100000000000;
    const SubrosianRing = 0x200000000000;
    const FirstGenRing = 0x400000000000;
    const SpinRing = 0x800000000000;
    const BombproofRing = 0x1000000000000;
    const EnergyRing = 0x2000000000000;
    const DoubleEdgeRing = 0x4000000000000;
    const GBANatureRing = 0x8000000000000;
    const SlayersRing = 0x10000000000000;
    const RupeeRing = 0x20000000000000;
    const VictoryRing = 0x40000000000000;
    const SignRing = 0x80000000000000;
    const HundredthRing = 0x100000000000000;
    const WhispRing = 0x200000000000000;
    const GashaRing = 0x400000000000000;
    const PeaceRing = 0x800000000000000;
    const ZoraRing = 0x1000000000000000;
    const FistRing = 0x2000000000000000;
    const WhimsicalRing = 0x4000000000000000;
    const ProtectionRing = PHP_INT_MIN;
}
