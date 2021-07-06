<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="dicipline")
 */

class Dicipline
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
    private $nom;
    /**
     * @ORM\OneToMany(targetEntity="Matiere", mappedBy="diciplines")
     */
    private $matieres;
    /**
     * @ORM\OneToMany(targetEntity="Controle", mappedBy="diciplines")
     */
    private $controles;
    /**
     * @ORM\ManyToMany(targetEntity="Niveau")
     */
    private $niveaux;
    /**
     * @ORM\OneToMany(targetEntity="Emploi_temps", mappedBy="diciplines")
     */
    private $emploi_tem;

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

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getMatieres()
    {
        return $this->matieres;
    }

    public function setMatieres($matieres)
    {
        $this->matieres = $matieres;
    }

    public function getControles()
    {
        return $this->controles;
    }

    public function setControles($controles)
    {
        $this->controles = $controles;
    }

    public function getNiveaux()
    {
        return $this->niveaux;
    }

    public function setNiveaux($niveaux)
    {
        $this->niveaux = $niveaux;
    }

    public function getEmploi_tem()
    {
        return $this->emploi_tem;
    }

    public function setEmploi_tem($emploi_tem)
    {
        $this->emploi_tem = $emploi_tem;
    }
}

?>