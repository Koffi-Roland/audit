<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SystemeSurveillanceRepository")
 */
class SystemeSurveillance
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
    private $limite_critique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $enregistrement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $action_corrective;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $frequence_controle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $responsable;

   

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TypeProbleme", inversedBy="systemeSurveillances")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeprobleme;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CritereSurveille", inversedBy="systemeSurveillances")
     * @ORM\JoinColumn(nullable=false)
     */
    private $criteresurveille;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $verification;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $resultat;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Etape", inversedBy="systemeSurveillances")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etape;

    public function __construct()
    {
        $this->etapes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLimiteCritique(): ?string
    {
        return $this->limite_critique;
    }

    public function setLimiteCritique(string $limite_critique): self
    {
        $this->limite_critique = $limite_critique;

        return $this;
    }

    public function getEnregistrement(): ?string
    {
        return $this->enregistrement;
    }

    public function setEnregistrement(string $enregistrement): self
    {
        $this->enregistrement = $enregistrement;

        return $this;
    }

    public function getActionCorrective(): ?string
    {
        return $this->action_corrective;
    }

    public function setActionCorrective(string $action_corrective): self
    {
        $this->action_corrective = $action_corrective;

        return $this;
    }

    public function getFrequenceControle(): ?string
    {
        return $this->frequence_controle;
    }

    public function setFrequenceControle(string $frequence_controle): self
    {
        $this->frequence_controle = $frequence_controle;

        return $this;
    }

    public function getResponsable(): ?string
    {
        return $this->responsable;
    }

    public function setResponsable(string $responsable): self
    {
        $this->responsable = $responsable;

        return $this;
    }


 
    public function getTypeprobleme(): ?TypeProbleme
    {
        return $this->typeprobleme;
    }

    public function setTypeprobleme(?TypeProbleme $typeprobleme): self
    {
        $this->typeprobleme = $typeprobleme;

        return $this;
    }

    public function getCriteresurveille(): ?CritereSurveille
    {
        return $this->criteresurveille;
    }

    public function setCriteresurveille(?CritereSurveille $criteresurveille): self
    {
        $this->criteresurveille = $criteresurveille;

        return $this;
    }

    public function getVerification(): ?string
    {
        return $this->verification;
    }

    public function setVerification(?string $verification): self
    {
        $this->verification = $verification;

        return $this;
    }

    public function getResultat(): ?string
    {
        return $this->resultat;
    }

    public function setResultat(?string $resultat): self
    {
        $this->resultat = $resultat;

        return $this;
    }

    public function getEtape(): ?Etape
    {
        return $this->etape;
    }

    public function setEtape(?Etape $etape): self
    {
        $this->etape = $etape;

        return $this;
    }
}
