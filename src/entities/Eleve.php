<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="eleve")
 */

class Eleve
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
    private $prenom;
    /**
     * @ORM\Column(type="datetime")
     */
    private $date_naissance;
    /**
     * @ORM\Column(type="string")
     */
    private $lieu_naissance;
    /**
     * @ORM\Column(type="string")
     */
    private $sexe;
    /**
     * @ORM\Column(type="string")
     */
    private $photo;
    /**
     * @ORM\Column(type="string")
     */
    private $cne;
    /**
     * @ORM\Column(type="string")
     */
    private $cni;
    /**
     * @ORM\ManyToOne(targetEntity="Ancienne_ecole", inversedBy="eleves")
     */
    private $acienne_ecole;
    /**
     * @ORM\ManyToMany(targetEntity="Parents")
     */
    private $paren;
    /**
     * @ORM\OneToMany(targetEntity="Retard_eleve", mappedBy="eleve")
     */
    private $retard;
    /**
     * @ORM\OneToMany(targetEntity="Absence_eleve", mappedBy="eleve")
     */
    private $absence;
    /**
     * @ORM\ManyToMany(targetEntity="Controle")
     */
    private $controles;
    /**
     * @ORM\ManyToMany(targetEntity="Classe")
     */
    private $classe;

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

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getDate_naissance()
    {
        return $this->date_naissance;
    }

    public function setDate_naissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }

    public function getLieu_naissance()
    {
        return $this->lieu_naissance;
    }

    public function setLieu_naissance($lieu_naissance)
    {
        $this->lieu_naissance = $lieu_naissance;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function getCne()
    {
        return $this->cne;
    }

    public function setCne($cne)
    {
        $this->cne = $cne;
    }

    public function getCni()
    {
        return $this->cni;
    }

    public function setCni($cni)
    {
        $this->cni = $cni;
    }

    public function getAcienne_ecole()
    {
        return $this->acienne_ecole;
    }

    public function setAcienne_ecole($acienne_ecole)
    {
        $this->acienne_ecole = $acienne_ecole;
    }

    public function getParen()
    {
        return $this->paren;
    }

    public function setParen($paren)
    {
        $this->paren = $paren;
    }

    public function getAbsence()
    {
        return $this->absence;
    }

    public function setAbsence($absence)
    {
        $this->absence = $absence;
    }

    public function getRetard()
    {
        return $this->retard;
    }

    public function setRetard($retard)
    {
        $this->retard = $retard;
    }

    public function getControles()
    {
        return $this->controles;
    }

    public function setControles($controles)
    {
        $this->controles = $controles;
    }

    public function getClasse()
    {
        return $this->classe;
    }

    public function setClasse($classe)
    {
        $this->classe = $classe;
    }
}
?>