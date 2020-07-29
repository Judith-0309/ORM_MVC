<?php
//les espaces de noms l'annotation qui est une classe dans Doctrine sera mapper à ORM
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity @ORM\Table(name="clientEntreprise")
 */

class ClientEntreprise
{
//Pour la clé primaire

    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/ 
    private $id;

    /** @ORM\Column(type="string") **/ 
    private $nomEntreprise;

    /** @ORM\Column(type="string") **/ 
    private $Ninea;

    /** @ORM\Column(type="string") **/ 
    private $adresse;

    /** @ORM\Column(type="string") **/ 
    private $raisonSociale;

    /** @ORM\Column(type="string") **/ 
    private $telephone;

    /** @ORM\Column(type="string") **/ 
    private $Email;
    
    /** @ORM\Column(type="string") **/ 
    private $RegistreCom;

     /**
 * @ORM\ManyToOne(targetEntity="compte", inversedBy="clientEntreprise")
 */
private $numeroCompte; 


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

    public function getNomEntreprise()
    {
        return $this->nomEntreprise;
    }

     public function setNomEntreprise($nomEntreprise)
    {
        $this->nomEntreprise = $nomEntreprise;

        
    }
 
    public function getNinea()
    {
        return $this->Ninea;
    }

    public function setNinea($Ninea)
    {
        $this->Ninea = $Ninea;
  
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

       public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        
    }

       public function getRaison_Sociale()
    {
        return $this->Raison_Sociale;
    }

    public function setRaison_Sociale($Raison_Sociale)
    {
        $this->Raison_Sociale = $Raison_Sociale;

        
    }


    public function getTelephone()
    {
        return $this->telephone;
    }

 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        
    }

 
    public function getEmail()
    {
        return $this->Email;
    }

    public function setEmail($Email)
    {
        $this->Email = $Email;

    }

 
    public function getRegistreCom()
    {
        return $this->RegistreCom;
    }

 
    public function setRegistreCom($RegistreCom)
    {
        $this->RegistreCom = $RegistreCom;

        
    }
}