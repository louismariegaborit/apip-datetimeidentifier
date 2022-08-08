<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ApiResource]
class CalendarEvent
{
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    #[ApiProperty(identifier: false)]
    private ?int $id = null;

    #[ApiProperty(identifier: true)]
    #[ORM\Column(type: 'date', unique: true)]
    private \DateTime $date;

    #[ORM\Column(type: 'string')]
    public string $title = '';

    public function __construct(\DateTime $date)
    {
        $this->date = $date;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }
}
