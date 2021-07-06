<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="emploi_temp")
 */

class Emploi_temps
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="time")
     */
    private $heure_debut;
    /**
     * @ORM\Column(type="time")
     */
    private $heure_fin;
    /**
     * @ORM\ManyToOne(targetEntity="Dicipline", inversedBy="emploi_tem")
     */
    private $diciplines;
    /**
    * @ORM\OneToOne(targetEntity="Professeur")
    */
    private $professeurs;

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

    public function getHeure_debut()
    {
        return $this->heure_debut;
    }

    public function setHeure_debut($heure_debut)
    {
        $this->heure_debut = $heure_debut;
    }

    public function getHeure_fin()
    {
        return $this->heure_fin;
    }

    public function setHeure_fin($heure_fin)
    {
        $this->heure_fin = $heure_fin;
    }

    public function getDiciplines()
    {
        return $this->diciplines;
    }

    public function setDiciplines($diciplines)
    {
        $this->diciplines = $diciplines;
    }


    /**
     * Get the value of professeurs
     */ 
    public function getProfesseurs()
    {
        return $this->professeurs;
    }

    /**
     * Set the value of professeurs
     *
     * @return  self
     */ 
    public function setProfesseurs($professeurs)
    {
        $this->professeurs = $professeurs;

        return $this;
    }
}

?>