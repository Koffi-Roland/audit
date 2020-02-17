<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IdentificationccpDangerRepository")
 */
class IdentificationccpDanger
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
    private $description_danger;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cause_danger;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mesure_preventive;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $frequence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gravite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $detection;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $risque;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ccp;

   
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $parametreMaitriser;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Etape", inversedBy="identificationccpDangers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Etape;

    public function __construct()
    {
        $this->etapes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionDanger(): ?string
    {
        return $this->description_danger;
    }

    public function setDescriptionDanger(string $description_danger): self
    {
        $this->description_danger = $description_danger;

        return $this;
    }

    public function getCauseDanger(): ?string
    {
        return $this->cause_danger;
    }

    public function setCauseDanger(string $cause_danger): self
    {
        $this->cause_danger = $cause_danger;

        return $this;
    }

    public function getMesurePreventive(): ?string
    {
        return $this->mesure_preventive;
    }

    public function setMesurePreventive(string $mesure_preventive): self
    {
        $this->mesure_preventive = $mesure_preventive;

        return $this;
    }

    public function getFrequence(): ?string
    {
        return $this->frequence;
    }

    public function setFrequence(string $frequence): self
    {
        $this->frequence = $frequence;

        return $this;
    }

    public function getGravite(): ?string
    {
        return $this->gravite;
    }

    public function setGravite(string $gravite): self
    {
        $this->gravite = $gravite;

        return $this;
    }

    public function getDetection(): ?string
    {
        return $this->detection;
    }

    public function setDetection(string $detection): self
    {
        $this->detection = $detection;

        return $this;
    }

    public function getRisque(): ?string
    {
        return $this->risque;
    }

    public function setRisque(string $risque): self
    {
        $this->risque = $risque;

        return $this;
    }

    public function getCcp(): ?bool
    {
        return $this->ccp;
    }

    public function setCcp(bool $ccp): self
    {
        $this->ccp = $ccp;

        return $this;
    }

   

   

  
    public function getParametreMaitriser(): ?string
    {
        return $this->parametreMaitriser;
    }

    public function setParametreMaitriser(string $parametreMaitriser): self
    {
        $this->parametreMaitriser = $parametreMaitriser;

        return $this;
    }

    public function getEtape(): ?Etape
    {
        return $this->Etape;
    }

    public function setEtape(?Etape $Etape): self
    {
        $this->Etape = $Etape;

        return $this;
    }
}
