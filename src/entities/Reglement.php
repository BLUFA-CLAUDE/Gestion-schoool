<?php

class Reglement
{
    private $id;
    private $montant_regle;
    private $date_reglement;
    private $mode_paiement;
    private $date_echeance;
    private $mois_regle;


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

    public function getMontant_regle()
    {
        return $this->montant_regle;
    }

    public function setMontant_regle($libemontant_reglelle)
    {
        $this->montant_regle = $montant_regle;
    }

    public function getDate_reglement()
    {
        return $this->date_reglement;
    }

    public function setDate_reglement($date_reglement)
    {
        $this->date_reglement = $date_reglement;
    }

    public function getMode_paiement()
    {
        return $this->mode_paiement;
    }

    public function setMode_paiement($mode_paiement)
    {
        $this->mode_paiement = $mode_paiement;
    }

    public function getMois_regle()
    {
        return $this->mois_regle;
    }

    public function setMois_regle($mois_regle)
    {
        $this->mois_regle = $mois_regle;
    }

}

?>