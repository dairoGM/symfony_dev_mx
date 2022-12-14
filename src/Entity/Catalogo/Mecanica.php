<?php

namespace App\Entity\Catalogo;

use App\Entity\BaseCatalogo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tbn_mecanica")
 */
class Mecanica extends BaseCatalogo
{

    /**
     * @ORM\Column(type="string", nullable=true, length="50")
     */
    private ?string $descripcion;

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }
}
