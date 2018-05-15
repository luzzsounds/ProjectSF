<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $useName;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $useFirstName;

    /**
     * @ORM\Column(type="date")
     */
    private $useBirthDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $return;

    public function getId()
    {
        return $this->id;
    }

    public function getUseName(): ?string
    {
        return $this->useName;
    }

    public function setUseName(string $useName): self
    {
        $this->useName = $useName;

        return $this;
    }

    public function getUseFirstName(): ?string
    {
        return $this->useFirstName;
    }

    public function setUseFirstName(?string $useFirstName): self
    {
        $this->useFirstName = $useFirstName;

        return $this;
    }

    public function getUseBirthDate(): ?\DateTimeInterface
    {
        return $this->useBirthDate;
    }

    public function setUseBirthDate(\DateTimeInterface $useBirthDate): self
    {
        $this->useBirthDate = $useBirthDate;

        return $this;
    }

    public function getReturn(): ?string
    {
        return $this->return;
    }

    public function setReturn(string $return): self
    {
        $this->return = $return;

        return $this;
    }
}
