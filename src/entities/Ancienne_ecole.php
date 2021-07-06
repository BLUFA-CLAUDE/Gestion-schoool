<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="eleve")
 */

class Ancienne_ecole
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
     * @ORM\Column(type="string")
     */
    private $type_ecole;
    /**
     * @ORM\Column(type="string")
     */
    private $statut_ecole;
    /**
     * @ORM\OneToMany(targetEntity="Eleve", mappedBy="acienne_ecole")
     */
    private $eleves;

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

    public function getType_ecole()
    {
        return $this->type_ecole;
    }

    public function setType_ecole($type_ecole)
    {
        $this->type_ecole = $type_ecole;
    }

    public function getStatut_ecole()
    {
        return $this->statut_ecole;
    }

    public function setStatut_ecole($statut_ecole)
    {
        $this->statut_ecole = $statut_ecole;
    }

    public function getEleves()
    {
        return $this->eleves;
    }

    public function setEleves($eleves)
    {
        $this->eleves = $eleves;
    }
}

?>