<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TypeProblemeRepository")
 */
class TypeProbleme
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
    private $probleme;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SystemeSurveillance", mappedBy="typeprobleme")
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

    public function getProbleme(): ?string
    {
        return $this->probleme;
    }

    public function setProbleme(string $probleme): self
    {
        $this->probleme = $probleme;

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
            $systemeSurveillance->setTypeprobleme($this);
        }

        return $this;
    }

    public function removeSystemeSurveillance(SystemeSurveillance $systemeSurveillance): self
    {
        if ($this->systemeSurveillances->contains($systemeSurveillance)) {
            $this->systemeSurveillances->removeElement($systemeSurveillance);
            // set the owning side to null (unless already changed)
            if ($systemeSurveillance->getTypeprobleme() === $this) {
                $systemeSurveillance->setTypeprobleme(null);
            }
        }

        return $this;
    }
}
