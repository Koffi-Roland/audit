<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EtapeRepository")
 */
class Etape
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
     * @ORM\Column(type="integer")
     */
    private $niveau;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageproduitobtenu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $elementsortie;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Produit", inversedBy="etapes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $produit;

   
   

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MatiereUtiliser", mappedBy="etape")
     */
    private $matiereUtilisers;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SystemeSurveillance", mappedBy="etape")
     */
    private $systemeSurveillances;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\IdentificationccpDanger", mappedBy="Etape")
     */
    private $identificationccpDangers;

    public function __construct()
    {
        $this->matiereUtilisers = new ArrayCollection();
        $this->systemeSurveillances = new ArrayCollection();
        $this->identificationccpDangers = new ArrayCollection();
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

    public function getNiveau(): ?int
    {
        return $this->niveau;
    }

    public function setNiveau(int $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getImageproduitobtenu(): ?string
    {
        return $this->imageproduitobtenu;
    }

    public function setImageproduitobtenu(?string $imageproduitobtenu): self
    {
        $this->imageproduitobtenu = $imageproduitobtenu;

        return $this;
    }

    public function getElementsortie(): ?string
    {
        return $this->elementsortie;
    }

    public function setElementsortie(?string $elementsortie): self
    {
        $this->elementsortie = $elementsortie;

        return $this;
    }

    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    public function setProduit(?Produit $produit): self
    {
        $this->produit = $produit;

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
            $matiereUtiliser->setEtape($this);
        }

        return $this;
    }

    public function removeMatiereUtiliser(MatiereUtiliser $matiereUtiliser): self
    {
        if ($this->matiereUtilisers->contains($matiereUtiliser)) {
            $this->matiereUtilisers->removeElement($matiereUtiliser);
            // set the owning side to null (unless already changed)
            if ($matiereUtiliser->getEtape() === $this) {
                $matiereUtiliser->setEtape(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SystemeSurveillance[]
     */
    public function getSystemeSurveillances(): Collection
    {
        return $this->systemeSurveillances;
    }

    public function addSystemeSurveillance(SystemeSurveillance $systemeSurveillance): self
    {
        if (!$this->systemeSurveillances->contains($systemeSurveillance)) {
            $this->systemeSurveillances[] = $systemeSurveillance;
            $systemeSurveillance->setEtape($this);
        }

        return $this;
    }

    public function removeSystemeSurveillance(SystemeSurveillance $systemeSurveillance): self
    {
        if ($this->systemeSurveillances->contains($systemeSurveillance)) {
            $this->systemeSurveillances->removeElement($systemeSurveillance);
            // set the owning side to null (unless already changed)
            if ($systemeSurveillance->getEtape() === $this) {
                $systemeSurveillance->setEtape(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|IdentificationccpDanger[]
     */
    public function getIdentificationccpDangers(): Collection
    {
        return $this->identificationccpDangers;
    }

    public function addIdentificationccpDanger(IdentificationccpDanger $identificationccpDanger): self
    {
        if (!$this->identificationccpDangers->contains($identificationccpDanger)) {
            $this->identificationccpDangers[] = $identificationccpDanger;
            $identificationccpDanger->setEtape($this);
        }

        return $this;
    }

    public function removeIdentificationccpDanger(IdentificationccpDanger $identificationccpDanger): self
    {
        if ($this->identificationccpDangers->contains($identificationccpDanger)) {
            $this->identificationccpDangers->removeElement($identificationccpDanger);
            // set the owning side to null (unless already changed)
            if ($identificationccpDanger->getEtape() === $this) {
                $identificationccpDanger->setEtape(null);
            }
        }

        return $this;
    }
}
