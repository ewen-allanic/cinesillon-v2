<?php

namespace App\Entity;

use App\Repository\PieceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PieceRepository::class)]
class Piece
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $frenchTitle = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $originalTitle = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'pieces')]
    private ?Support $idSupport = null;

    #[ORM\ManyToOne(inversedBy: 'pieces', cascade: ['persist', 'remove'])]
    private ?Image $idImageBanner = null;

    #[ORM\OneToMany(mappedBy: 'piece', targetEntity: Image::class, cascade: ['persist', 'remove'])]
    private Collection $imageThumbnails;

    #[ORM\ManyToOne(inversedBy: 'pieces')]
    private ?TypePiece $idTypePiece = null;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'pieces')]
    private ?self $idPiece = null;

    #[ORM\OneToMany(mappedBy: 'idPiece', targetEntity: self::class)]
    private Collection $pieces;

    #[ORM\ManyToOne(inversedBy: 'pieces')]
    private ?Piste $idPiste = null;

    #[ORM\ManyToOne(inversedBy: 'pieces')]
    private ?Artist $artist = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $realisedAt = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $labelName = null;

    public function __construct()
    {
        $this->pieces = new ArrayCollection();
        $this->imageThumbnails = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFrenchTitle(): ?string
    {
        return $this->frenchTitle;
    }

    public function setFrenchTitle(?string $frenchTitle): static
    {
        $this->frenchTitle = $frenchTitle;

        return $this;
    }

    public function getOriginalTitle(): ?string
    {
        return $this->originalTitle;
    }

    public function setOriginalTitle(?string $originalTitle): static
    {
        $this->originalTitle = $originalTitle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getIdSupport(): ?Support
    {
        return $this->idSupport;
    }

    public function setIdSupport(?Support $idSupport): static
    {
        $this->idSupport = $idSupport;

        return $this;
    }

    public function getIdImageBanner(): ?Image
    {
        return $this->idImageBanner;
    }

    public function setIdImageBanner(?Image $idImageBanner): static
    {
        $this->idImageBanner = $idImageBanner;

        return $this;
    }

    public function getImageThumbnails(): Collection
    {
        return $this->imageThumbnails;
    }

    public function addImageThumbnail(Image $imageThumbnail): static
    {
        if (!$this->imageThumbnails->contains($imageThumbnail)) {
            $this->imageThumbnails[] = $imageThumbnail;
            $imageThumbnail->setPiece($this);
        }
        return $this;
    }

    public function removeImageThumbnail(Image $imageThumbnail): self
    {
        if ($this->imageThumbnails->contains($imageThumbnail)) {
            $this->imageThumbnails->removeElement($imageThumbnail);
            // set the owning side to null (unless already changed)
            if ($imageThumbnail->getPiece() === $this) {
                $imageThumbnail->setPiece(null);
            }
        }
        return $this;
    }

    public function getIdTypePiece(): ?TypePiece
    {
        return $this->idTypePiece;
    }

    public function setIdTypePiece(?TypePiece $idTypePiece): static
    {
        $this->idTypePiece = $idTypePiece;

        return $this;
    }

    public function getIdPiece(): ?self
    {
        return $this->idPiece;
    }

    public function setIdPiece(?self $idPiece): static
    {
        $this->idPiece = $idPiece;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getPieces(): Collection
    {
        return $this->pieces;
    }

    public function addPiece(self $piece): static
    {
        if (!$this->pieces->contains($piece)) {
            $this->pieces->add($piece);
            $piece->setIdPiece($this);
        }

        return $this;
    }

    public function removePiece(self $piece): static
    {
        if ($this->pieces->removeElement($piece)) {
            // set the owning side to null (unless already changed)
            if ($piece->getIdPiece() === $this) {
                $piece->setIdPiece(null);
            }
        }

        return $this;
    }

    public function getIdPiste(): ?Piste
    {
        return $this->idPiste;
    }

    public function setIdPiste(?Piste $idPiste): static
    {
        $this->idPiste = $idPiste;

        return $this;
    }

    public function getArtist(): ?Artist
    {
        return $this->artist;
    }

    public function setArtist(?Artist $artist): static
    {
        $this->artist = $artist;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getRealisedAt(): ?\DateTimeImmutable
    {
        return $this->realisedAt;
    }

    public function setRealisedAt(?\DateTimeImmutable $realisedAt): static
    {
        $this->realisedAt = $realisedAt;

        return $this;
    }

    public function getLabelName(): ?string
    {
        return $this->labelName;
    }

    public function setLabelName(?string $labelName): static
    {
        $this->labelName = $labelName;

        return $this;
    }

    public function __toString(): string
    {
        return (string) $this->getFrenchTitle();
    }
}
