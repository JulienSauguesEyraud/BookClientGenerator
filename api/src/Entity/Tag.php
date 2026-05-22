<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Enum\Tags;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
#[ApiResource(mercure: true)]
class Tag
{
    #[ORM\Id]
    #[ORM\Column(name: 'id', type: 'integer')]
    #[ORM\GeneratedValue]
    private ?int $id = null;

    #[ORM\Column(name: 'name', enumType: Tags::class)]
    #[Assert\NotBlank]
    public Tags $name = Tags::scienceFiction;

    public function getId(): ?int
    {
        return $this->id;
    }
}
