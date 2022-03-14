<?php

declare(strict_types=1);

namespace Zopg\Model\Game;

use Zopg\Model\Animal;
use Zopg\Model\Behavior;
use Zopg\Model\Game;
use Zopg\Model\Memory;

abstract class AbstractGame implements Game
{
    protected int $identifier;

    protected string $name;

    public function getIdentifier(): int
    {
        return $this->identifier;
    }

    public function setIdentifier(int $identifier): void
    {
        $this->identifier = $identifier;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getHeroName(): string
    {
        // TODO: Implement getHeroName() method.
    }

    public function setHeroName(string $heroName): void
    {
        // TODO: Implement setHeroName() method.
    }

    public function getChildName(): string
    {
        // TODO: Implement getChildName() method.
    }

    public function setChildName(string $childName): void
    {
        // TODO: Implement setChildName() method.
    }

    public function getAnimal(): Animal
    {
        // TODO: Implement getAnimal() method.
    }

    public function setAnimal(Animal $animal): void
    {
        // TODO: Implement setAnimal() method.
    }

    public function getBehavior(): Behavior
    {
        // TODO: Implement getBehavior() method.
    }

    public function setBehavior(Behavior $behavior): void
    {
        // TODO: Implement setBehavior() method.
    }

    public function isLinkedGame(): bool
    {
        // TODO: Implement isLinkedGame() method.
    }

    public function setLinkedGame(bool $linkedGame): void
    {
        // TODO: Implement setLinkedGame() method.
    }

    public function isHeroQuest(): bool
    {
        // TODO: Implement isHeroQuest() method.
    }

    public function setHeroQuest(bool $heroQuest): void
    {
        // TODO: Implement setHeroQuest() method.
    }

    public function getMemory(): Memory
    {
        // TODO: Implement getMemory() method.
    }

    public function setMemory(Memory $memory): void
    {
        // TODO: Implement setMemory() method.
    }

    public function isReturnSecret(): bool
    {
        // TODO: Implement isReturnSecret() method.
    }

    public function setReturnSecret(bool $returnSecret): void
    {
        // TODO: Implement setReturnSecret() method.
    }

    public function wasGivenFreeRing(): bool
    {
        // TODO: Implement wasGivenFreeRing() method.
    }

    public function setGivenFreeRing(bool $givenFreeRing): void
    {
        // TODO: Implement setGivenFreeRing() method.
    }
}