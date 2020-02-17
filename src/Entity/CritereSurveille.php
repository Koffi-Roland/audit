<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CritereSurveilleRepository")
 */
class CritereSurveille
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
    private $critere;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SystemeSurveillance", mappedBy="criteresurveille")
     */
    private $systemeSurveillances;

    public function __construct()
    {
        $this->systemeSurveillances = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCritere(): ?string
    {
        return $this->critere;
    }

    public function setCritere(string $critere): self
    {
        $this->critere = $critere;

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
            $systemeSurveillance->setCriteresurveille($this);
        }

        return $this;
    }

    public function removeSystemeSurveillance(SystemeSurveillance $systemeSurveillance): self
    {
        if ($this->systemeSurveillances->contains($systemeSurveillance)) {
            $this->systemeSurveillances->removeElement($systemeSurveillance);
            // set the owning side to null (unless already changed)
            if ($systemeSurveillance->getCriteresurveille() === $this) {
                $systemeSurveillance->setCriteresurveille(null);
            }
        }

        return $this;
    }
}
