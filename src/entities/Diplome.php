<?php

class Diplome
{
    private $id;
    private $intitule;
    private $ecole;
    private $specialite;
    private $niveau;
    private $date_obtention;

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

    public function getIntitule()
    {
        return $this->intitule;
    }

    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    }

    public function getEcole()
    {
        return $this->ecole;
    }

    public function setEcole($ecole)
    {
        $this->ecole = $ecole;
    }

    public function getSpecialite()
    {
        return $this->specialite;
    }

    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
    }

    public function getNiveau()
    {
        return $this->niveau;
    }

    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }

    public function getDate_obtention()
    {
        return $this->date_obtention;
    }

    public function setDate_obtention($date_obtention)
    {
        $this->date_obtention = $date_obtention;
    }
}
?>