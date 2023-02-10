<?php

namespace App\Entity;

use App\Repository\TicketRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $choix1 = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $choix2 = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $choix3 = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $choix4 = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $choix5 = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $luckyNumber = null;

    #[ORM\Column]
    private ?bool $wasDrawn = null;

    #[ORM\ManyToOne(inversedBy: 'tickets')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $player = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getChoix1(): ?int
    {
        return $this->choix1;
    }

    public function setChoix1(int $choix1): self
    {
        $this->choix1 = $choix1;

        return $this;
    }

    public function getChoix2(): ?int
    {
        return $this->choix2;
    }

    public function setChoix2(int $choix2): self
    {
        $this->choix2 = $choix2;

        return $this;
    }

    public function getChoix3(): ?int
    {
        return $this->choix3;
    }

    public function setChoix3(int $choix3): self
    {
        $this->choix3 = $choix3;

        return $this;
    }

    public function getChoix4(): ?int
    {
        return $this->choix4;
    }

    public function setChoix4(int $choix4): self
    {
        $this->choix4 = $choix4;

        return $this;
    }

    public function getChoix5(): ?int
    {
        return $this->choix5;
    }

    public function setChoix5(int $choix5): self
    {
        $this->choix5 = $choix5;

        return $this;
    }

    public function getLuckyNumber(): ?int
    {
        return $this->luckyNumber;
    }

    public function setLuckyNumber(int $luckyNumber): self
    {
        $this->luckyNumber = $luckyNumber;

        return $this;
    }

    public function isWasDrawn(): ?bool
    {
        return $this->wasDrawn;
    }

    public function setWasDrawn(bool $wasDrawn): self
    {
        $this->wasDrawn = $wasDrawn;

        return $this;
    }

    public function getPlayer(): ?user
    {
        return $this->player;
    }

    public function setPlayer(?user $player): self
    {
        $this->player = $player;

        return $this;
    }
}
