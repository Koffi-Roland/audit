<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MatierePremiereRepository")
 */
class MatierePremiere
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MatiereUtiliser", mappedBy="matierepremiere")
     */
    private $matiereUtilisers;

    public function __construct()
    {
        $this->matiereUtilisers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return Collection|MatiereUtiliser[]
     */
    public function getMatiereUtilisers(): Collection
    {
        return $this->matiereUtilisers;
    }

    public function addMatiereUtiliser(MatiereUtiliser $matiereUtiliser): self
    {
        if (!$this->matiereUtilisers->contains($matiereUtiliser)) {
            $this->matiereUtilisers[] = $matiereUtiliser;
            $matiereUtiliser->setMatierepremiere($this);
        }

        return $this;
    }

    public function removeMatiereUtiliser(MatiereUtiliser $matiereUtiliser): self
    {
        if ($this->matiereUtilisers->contains($matiereUtiliser)) {
            $this->matiereUtilisers->removeElement($matiereUtiliser);
            // set the owning side to null (unless already changed)
            if ($matiereUtiliser->getMatierepremiere() === $this) {
                $matiereUtiliser->setMatierepremiere(null);
            }
        }

        return $this;
    }
}
