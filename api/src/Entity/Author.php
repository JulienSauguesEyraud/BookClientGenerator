<?php

namespace App\Doctrine\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity]
class Author
{

    #[ORM\Id]
    #[ORM\Column(type: 'integer', name: 'id')]
    #[ORM\GeneratedValue]
    private ?int $id = null;

    #[ORM\Column(name: 'name')]
    #[Assert\NotBlank]
    public string $name = '';

    #[ORM\Column(name: 'birth_date')]
    #[Assert\NotBlank]
    public int $birthDate;

    public function getId(): ?int
    {
        return $this->id;
    }
}
