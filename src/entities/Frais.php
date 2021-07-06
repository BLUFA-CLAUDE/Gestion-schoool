<?php

class Frais
{
    private $id;
    private $type_frais;
    private $frais_1;
    private $frais_2;
    private $frais_3;

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

    public function getType_frais()
    {
        return $this->type_frais;
    }

    public function setType_frais($type_frais)
    {
        $this->type_frais = $type_frais;
    }

    public function getFrais_1()
    {
        return $this->frais_1;
    }

    public function setFrais_1($frais_1)
    {
        $this->frais_1 = $frais_1;
    }

    public function getFrais_2()
    {
        return $this->frais_2;
    }

    public function setFrais_2($frais_2)
    {
        $this->frais_2 = $frais_2;
    }

    public function getFrais_3()
    {
        return $this->frais_3;
    }

    public function setFrais_3($frais_3)
    {
        $this->frais_3 = $frais_3;
    }

    
}
?>