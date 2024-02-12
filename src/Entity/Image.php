<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
#[Vich\Uploadable]
#[ORM\HasLifecycleCallbacks]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Vich\UploadableField(mapping: 'artists', fileNameProperty: 'name')]
    // #[Vich\UploadableField(mapping: 'pieces', fileNameProperty: 'name')]
    private ?File $file = null;

    #[ORM\Column(length: 75, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $path = null;

    #[ORM\OneToMany(mappedBy: 'idImageBanner', targetEntity: Piece::class)]
    private Collection $bannerPieces;

    #[ORM\ManyToOne(inversedBy: 'imageThumbnails', targetEntity: Piece::class)]
    private Piece $piece;

    #[ORM\OneToOne(mappedBy: 'imageId', targetEntity: Artist::class , cascade: ['persist', 'remove'])]
    private ?Artist $artistId = null;

    public function __construct()
    {
        // $this->artists = new ArrayCollection();
        $this->bannerPieces = new ArrayCollection();
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of file
     */ 
    public function getFile(): ?File
    {
        return $this->file;
    }

    public function setFile(?File $file = null): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of path
     */ 
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set the value of path
     *
     * @return  self
     */ 
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get the value of bannerPieces
     */ 
    public function getBannerPieces()
    {
        return $this->bannerPieces;
    }

    /**
     * Set the value of bannerPieces
     *
     * @return  self
     */ 
    public function setBannerPieces($bannerPieces)
    {
        $this->bannerPieces = $bannerPieces;

        return $this;
    }

    
    public function getArtistId(): Artist
    {
        return $this->artistId;
    }
    
    public function setArtistId($artistId): self
    {
        $this->artistId = $artistId;
        
        return $this;
    }
    
    /**
     * Get the value of piece
     */ 
    public function getPiece()
    {
        return $this->piece;
    }
    
    /**
     * Set the value of piece
     *
     * @return  self
     */ 
    public function setPiece($piece)
    {
        $this->piece = $piece;
        
        return $this;
    }
    
    public function __toString(): string
    {
        return (string) $this->getName();
    }
}
