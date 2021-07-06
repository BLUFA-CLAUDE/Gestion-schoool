<?php

class Absence_professeur
{
    private $id;
    private $heure_debut;
    private $heure_fin;
    private $date_absence;
    private $motif;

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
}

?>