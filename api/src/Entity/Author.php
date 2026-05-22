<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
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

    #[ORM\Column(name: 'birth_date')]
    #[Assert\NotBlank]
    public int $birthDate;

    #[ORM\OneToMany(targetEntity: Book::class, mappedBy: 'author', cascade: ['persist'])]
    #[ORM\JoinColumn(name: 'book_id', referencedColumnName: 'id', nullable: false)]
    public Book $books;

    public function getId(): ?int
    {
        return $this->id;
    }
}
