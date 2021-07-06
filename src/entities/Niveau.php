<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="niveau")
 */
class Niveau
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $libelle;
    /**
     * @ORM\Column(type="string")
     */
    private $option;
    /**
     * @ORM\Column(type="integer")
     */
    private $capacite_classe;
    /**
     * @ORM\OneToMany(targetEntity="Classe", mappedBy="niveaux")
     */
    private $classe;
    /**
     * @ORM\ManyToMany(targetEntity="Dicipline")
     */
    private $diciplines;


    public function __construct()
    {

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function getOption()
    {
        return $this->option;
    }

    public function setOption($option)
    {
        $this->option = $option;
    }

    public function getCapacite_classe()
    {
        return $this->capacite_classe;
    }

    public function setCapacite_classe($capacite_classe)
    {
        $this->capacite_classe = $capacite_classe;
    }

    public function getClasse()
    {
        return $this->classe;
    }

    public function setClasse($classe)
    {
        $this->classe = $classe;
    }

    public function getDiciplines()
    {
        return $this->diciplines;
    }

    public function setDiciplines($diciplines)
    {
        $this->diciplines = $diciplines;
    }
}

?>