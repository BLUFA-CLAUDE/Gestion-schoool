<?php


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="absence_eleve")
 */

class Absence_eleve
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
     * @ORM\Column(type="datetime")
     */
    private $date_absence;
    /**
     * @ORM\Column(type="string")
     */
    private $motif;
    /**
     * @ORM\ManyToOne(targetEntity="Eleve", inversedBy="absence")
     */
    private $eleve;
    

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

    public function getDate_absence()
    {
        return $this->date_absence;
    }

    public function setDate_absence($date_absence)
    {
        $this->date_absence = $date_absence;
    }

    public function getmotif()
    {
        return $this->motif;
    }

    public function setmotif($motif)
    {
        $this->motif = $motif;
    }

    public function getEleve()
    {
        return $this->eleve;
    }

    public function setEleve($eleve)
    {
        $this->eleve = $eleve;
    }
}

?>