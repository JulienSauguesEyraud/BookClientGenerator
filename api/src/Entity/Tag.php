<?php

namespace App\Doctrine\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Doctrine\Enum\Tags;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity]
class Tag
{

    #[ORM\Id]
    #[ORM\Column(type: 'integer', name: 'id')]
    #[ORM\GeneratedValue]
    private ?int $id = null;

    #[ORM\Column(name: 'name')]
    #[Assert\NotBlank]
    public Tags $name;

    public function getId(): ?int
    {
        return $this->id;
    }
}
