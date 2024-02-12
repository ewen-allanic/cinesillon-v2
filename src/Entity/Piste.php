<?php

namespace App\Entity;

use App\Repository\PisteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PisteRepository::class)]
class Piste
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $frenchFilmTitle = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $originalFilmTitle = null;

    #[ORM\ManyToOne(inversedBy: 'pistes')]
    private ?Artist $idArtist = null;

    #[ORM\OneToMany(mappedBy: 'idPiste', targetEntity: Piece::class)]
    private Collection $pieces;

    public function __construct()
    {
        $this->pieces = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFrenchFilmTitle(): ?string
    {
        return $this->frenchFilmTitle;
    }

    public function setFrenchFilmTitle(?string $frenchFilmTitle): static
    {
        $this->frenchFilmTitle = $frenchFilmTitle;

        return $this;
    }

    public function getOriginalFilmTitle(): ?string
    {
        return $this->originalFilmTitle;
    }

    public function setOriginalFilmTitle(?string $originalFilmTitle): static
    {
        $this->originalFilmTitle = $originalFilmTitle;

        return $this;
    }

    public function getIdArtist(): ?Artist
    {
        return $this->idArtist;
    }

    public function setIdArtist(?Artist $idArtist): static
    {
        $this->idArtist = $idArtist;

        return $this;
    }

    /**
     * @return Collection<int, Piece>
     */
    public function getPieces(): Collection
    {
        return $this->pieces;
    }

    public function addPiece(Piece $piece): static
    {
        if (!$this->pieces->contains($piece)) {
            $this->pieces->add($piece);
            $piece->setIdPiste($this);
        }

        return $this;
    }

    public function removePiece(Piece $piece): static
    {
        if ($this->pieces->removeElement($piece)) {
            // set the owning side to null (unless already changed)
            if ($piece->getIdPiste() === $this) {
                $piece->setIdPiste(null);
            }
        }

        return $this;
    }
}
