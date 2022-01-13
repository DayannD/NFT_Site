<?php

namespace App\Entity;

use App\Repository\FavorisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FavorisRepository::class)]
class Favoris
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'favoris')]
    private $NFT_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNFTId(): ?User
    {
        return $this->NFT_id;
    }

    public function setNFTId(?User $NFT_id): self
    {
        $this->NFT_id = $NFT_id;

        return $this;
    }
}
