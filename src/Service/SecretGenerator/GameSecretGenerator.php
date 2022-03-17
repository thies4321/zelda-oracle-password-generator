<?php

declare(strict_types=1);

namespace Zopg\Service\SecretGenerator;

use Zopg\Model\Animal\Animal;
use Zopg\Model\Behavior\Behavior;
use Zopg\Repository\AnimalRepository;
use Zopg\Repository\BehaviorRepository;
use Zopg\Repository\Storage\StorageAnimalRepository;
use Zopg\Repository\Storage\StorageBehaviorRepository;
use Zopg\Service\SecretGenerator;
use Zopg\Storage\Animal as AnimalStorage;
use Zopg\Storage\Behavior as BehaviorStorage;

final class GameSecretGenerator extends SecretGenerator
{
    private const validPalCharacters = [
        '0x41', '0x42', '0x43', '0x44', '0x45', '0x46', '0x47', '0x48',
        '0x49', '0x4a', '0x4b', '0x4c', '0x4d', '0x4e', '0x4f', '0x50',
        '0x51', '0x52', '0x53', '0x54', '0x55', '0x56', '0x57', '0x58',
        '0x59', '0x5a', '0x20', '0x2e', '0x2c', '0x5f', '0x80', '0x81',
        '0x82', '0x83', '0x84', '0x20', '0x85', '0x86', '0x87', '0x88',
        '0x89', '0x8a', '0x8b', '0x8c', '0x8d', '0x8e', '0x8f', '0x90',
        '0x21', '0x27', '0x2d', '0x3a', '0x3b', '0x3d', '0x11', '0x12',
        '0xbd', '0x13', '0x28', '0x29', '0x00', '0x61', '0x62', '0x63',
        '0x64', '0x65', '0x66', '0x67', '0x68', '0x69', '0x6a', '0x6b',
        '0x6c', '0x6d', '0x6e', '0x6f', '0x70', '0x71', '0x72', '0x73',
        '0x74', '0x75', '0x76', '0x77', '0x78', '0x79', '0x7a', '0x20',
        '0x2e', '0x2c', '0x5f', '0xa0', '0xa1', '0xa2', '0xa3', '0xa4',
        '0x20', '0xa5', '0xa6', '0xa7', '0xa8', '0xa9', '0xaa', '0xab',
        '0xac', '0xad', '0xae', '0xaf', '0xb0', '0x21', '0x27', '0x2d',
        '0x3a', '0x3b', '0x3d', '0x11', '0x12', '0xbd', '0x13', '0x28',
        '0x29', '0x00'
    ];

    private AnimalRepository $animalRepository;

    private BehaviorRepository $behaviorRepository;

    protected string $hero;

    protected string $child;

    protected Behavior $behavior;

    protected Animal $animal;

    protected int $game;

    protected bool $isHeroQuest;

    protected bool $isLinkedGame;

    protected bool $wasGivenFreeRing;

    public function __construct()
    {
        $this->animalRepository = new StorageAnimalRepository();
        $this->behaviorRepository = new StorageBehaviorRepository();

        $this->hero = '\0\0\0\0\0';
        $this->child = '\0\0\0\0\0';
        $this->behavior = $this->behaviorRepository->getByName(BehaviorStorage::INFANT[BehaviorStorage::FIELD_NAME]);
        $this->animal = $this->animalRepository->getByName(AnimalStorage::RICKY[AnimalStorage::FIELD_NAME]);
        $this->game = self::GAME_AGES;
        $this->isHeroQuest = false;
        $this->isLinkedGame = false;
        $this->wasGivenFreeRing = false;

        parent::__construct(20, self::GAME_AGES, self::GAME_REGIONS[self::GAME_REGION_USA]);
    }

    public function toBytes()
    {

    }
}