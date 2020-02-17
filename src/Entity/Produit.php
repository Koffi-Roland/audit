<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
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
    private $aspectfinal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $caracteristique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $utilisationprevue;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $emballage;

    /**
     * @ORM\Column(type="string")
     */
    private $dureconservation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageproduit;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Produir", mappedBy="produit")
     */
    private $produirs;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Etape", mappedBy="produit")
     */
    private $etapes;

    public function __construct()
    {
        $this->produirs = new ArrayCollection();
        $this->etapes = new ArrayCollection();
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

    public function getAspectfinal(): ?string
    {
        return $this->aspectfinal;
    }

    public function setAspectfinal(string $aspectfinal): self
    {
        $this->aspectfinal = $aspectfinal;

        return $this;
    }

    public function getCaracteristique(): ?string
    {
        return $this->caracteristique;
    }

    public function setCaracteristique(string $caracteristique): self
    {
        $this->caracteristique = $caracteristique;

        return $this;
    }

    public function getUtilisationprevue(): ?string
    {
        return $this->utilisationprevue;
    }

    public function setUtilisationprevue(string $utilisationprevue): self
    {
        $this->utilisationprevue = $utilisationprevue;

        return $this;
    }

    public function getEmballage(): ?string
    {
        return $this->emballage;
    }

    public function setEmballage(?string $emballage): self
    {
        $this->emballage = $emballage;

        return $this;
    }

    public function getDureconservation(): ?string
    {
        return $this->dureconservation;
    }

    public function setDureconservation(string $dureconservation): self
    {
        $this->dureconservation = $dureconservation;

        return $this;
    }

    public function getImageproduit(): ?string
    {
        return $this->imageproduit;
    }

    public function setImageproduit(?string $imageproduit): self
    {
        $this->imageproduit = $imageproduit;

        return $this;
    }

    /**
     * @return Collection|Produir[]
     */
    public function getProduirs(): Collection
    {
        return $this->produirs;
    }

    public function addProduir(Produir $produir): self
    {
        if (!$this->produirs->contains($produir)) {
            $this->produirs[] = $produir;
            $produir->setProduit($this);
        }

        return $this;
    }

    public function removeProduir(Produir $produir): self
    {
        if ($this->produirs->contains($produir)) {
            $this->produirs->removeElement($produir);
            // set the owning side to null (unless already changed)
            if ($produir->getProduit() === $this) {
                $produir->setProduit(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Etape[]
     */
    public function getEtapes(): Collection
    {
        return $this->etapes;
    }

    public function addEtape(Etape $etape): self
    {
        if (!$this->etapes->contains($etape)) {
            $this->etapes[] = $etape;
            $etape->setProduit($this);
        }

        return $this;
    }

    public function removeEtape(Etape $etape): self
    {
        if ($this->etapes->contains($etape)) {
            $this->etapes->removeElement($etape);
            // set the owning side to null (unless already changed)
            if ($etape->getProduit() === $this) {
                $etape->setProduit(null);
            }
        }

        return $this;
    }
}
