<?php

namespace App\Entity\Catalogo;

use App\Entity\BaseCatalogo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sq_catalogo.tbn_grupo")
 */
class Grupo extends BaseCatalogo
{
    /**
     * @ORM\Column(type="string", nullable=false, length="50")
     */
    private ?string $grupo;

    /**
     * @ORM\Column(type="string", nullable=false, length="50")
     */
    private ?string $grupoNuevo;

    public function getGrupo()
    {
        return $this->grupo;
    }

    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    public function getGrupoNuevo()
    {
        return $this->grupoNuevo;
    }

    public function setGrupoNuevo($grupoNuevo)
    {
        $this->grupoNuevo = $grupoNuevo;

        return $this;
    }
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Catalogo\Compania")
     * @ORM\JoinColumn(nullable=true)
     */
    private ?Compania $compania = null;

    /**
     * @return Compania|null
     */
    public function getCompania(): ?Compania
    {
        return $this->compania;
    }

    /**
     * @param Compania|null $compania
     */
    public function setCompania(?Compania $compania): void
    {
        $this->compania = $compania;
    }
}
