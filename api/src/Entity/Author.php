<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
#[ApiResource(mercure: true)]
class Author
{
    #[ORM\Id]
    #[ORM\Column(name: 'id', type: 'integer')]
    #[ORM\GeneratedValue]
    private ?int $id = null;

    #[ORM\Column(name: 'name')]
    #[Assert\NotBlank]
    public string $name = '';

    #[ORM\Column(name: 'birth_year')]
    #[Assert\NotBlank]
    public int $birthYear = 1950;

    #[ORM\OneToMany(targetEntity: Book::class, mappedBy: 'author')]
    #[ApiProperty(writable: false)]
    public ?Collection $books;

    public function __construct()
    {
        $this->books = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
