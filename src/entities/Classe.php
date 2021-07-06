<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="classe")
 */

class Classe
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
     * @ORM\ManyToMany(targetEntity="Eleve")
     */
    private $eleves;
    /**
     * @ORM\ManyToOne(targetEntity="Niveau", inversedBy="classe")
     */
    private $niveaux;
    /**
    * @ORM\OneToOne(targetEntity="Emploi_temps")
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

    public function getEleves()
    {
        return $this->eleves;
    }

    public function setEleves($eleves)
    {
        $this->eleves = $eleves;
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