<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuariosRepository")
 */
class Usuarios
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $tipo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    
    /**
     * @ORM\Column(type="string", length=14)
     */
    private $cpf;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $r_social;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $cnpj;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?bool
    {
        return $this->tipo;
    }

    public function setTipo(bool $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    
    public function getCpf(): ?int
    {
        return $this->cpf;
    }

    public function setCpf(int $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getRSocial(): ?string
    {
        return $this->r_social;
    }

    public function setRSocial(string $r_social): self
    {
        $this->r_social = $r_social;

        return $this;
    }

    public function getCnpj(): ?int
    {
        return $this->cnpj;
    }

    public function setCnpj(int $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
