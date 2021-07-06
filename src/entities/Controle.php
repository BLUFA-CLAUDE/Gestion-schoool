<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="controle")
 */

class Controle
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
     * @ORM\Column(type="datetime")
     */
    private $date_controle;
    /**
     * @ORM\Column(type="string")
     */
    private $duree;
    /**
     * @ORM\Column(type="string")
     */
    private $periode;
    /**
     * @ORM\ManyToMany(targetEntity="Eleve")
     */
    private $eleves;
    /**
     * @ORM\ManyToOne(targetEntity="Dicipline", inversedBy="controles")
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

    public function getDate_controle()
    {
        return $this->date_controle;
    }

    public function setDate_controle($date_controle)
    {
        $this->date_controle = $date_controle;
    }

    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    public function getPeriode()
    {
        return $this->periode;
    }

    public function setPeriode($periode)
    {
        $this->periode = $periode;
    }

    public function getEleves()
    {
        return $this->eleves;
    }

    public function setEleves($eleves)
    {
        $this->eleves = $eleves;
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