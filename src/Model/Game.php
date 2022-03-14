<?php

declare(strict_types=1);

namespace Zopg\Model;

interface Game
{
    public function getIdentifier(): int;

    public function setIdentifier(int $identifier): void;

    public function getName(): string;

    public function setName(string $name): void;

    public function getHeroName(): string;

    public function setHeroName(string $heroName): void;

    public function getChildName(): string;

    public function setChildName(string $childName): void;

    public function getAnimal(): Animal;

    public function setAnimal(Animal $animal): void;

    public function getBehavior(): Behavior;

    public function setBehavior(Behavior $behavior): void;

    public function isLinkedGame(): bool;

    public function setLinkedGame(bool $linkedGame): void;

    public function isHeroQuest(): bool;

    public function setHeroQuest(bool $heroQuest): void;

    public function getMemory(): Memory;

    public function setMemory(Memory $memory): void;

    public function isReturnSecret(): bool;

    public function setReturnSecret(bool $returnSecret): void;

    public function wasGivenFreeRing(): bool;

    public function setGivenFreeRing(bool $givenFreeRing): void;
}