<?php
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity @ORM\Table(name="compte")
 */
class Compte
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;

     /** @ORM\Column(type="string") **/
    private $typeCompte;

       
/**
        * @ORM\ManyToOne(targetEntity="Clientparticulier",inversedBy="compte")
      */
    private $idClientPhysique;


     /**
        * @ORM\ManyToOne(targetEntity="ClientEntreprise",inversedBy="compte")
      */
     private $idEntreprise;
    
     /** @ORM\Column(type="string") **/
    private $NumeroCompte;
     
    /** @ORM\Column(type="string") **/
    private $CleRib;

     /** @ORM\Column(type="string") **/
    private $EtatCompte;
     
     /** @ORM\Column(type="string") **/
    private $DepotInitial;
    
     /** @ORM\Column(type="integer") **/
    private $DateOuverture;
    

   

    public function __construct()
    {

    }
    //getters setters
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id=$id;
    }

    public function getTypeCompte()
    {
        return $this->typeCompte;
    }
    public function setTypeCompte($typeCompte)
    {
        $this->typeCompte=$typeCompte;
    }

    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }
    public function setIdEntreprise($idEntreprise)
    {
        $this->idEntreprise=$idEntreprise;
    }

    public function getIdClientPhysique()
    {
        return $this->IdClientPhysique;
    }
    public function setIdClientPhysique($IdClientPhysique)
    {
        $this->IdClientPhysique=$IdClientPhysique;
    }

        public function getNumeroCompte()
    {
            return $this->NumeroCompte;
    }
    public function setNumeroCompte($NumeroCompte)
    {
           $this->NumeroCompte=$NumeroCompte;
    }

        public function getCleRib()
    {
            return $this->CleRib;
    }
    public function setCleRib($CleRib)
    {
           $this->CleRib=$CleRib;
    }

        public function getEtatCompte()
    {
            return $this->EtatCompte;
    }
    public function setEtatCompte($EtatCompte)
    {
            $this->EtatCompte=$EtatCompte;
    }

        public function getDepotInitial()
    {
            return $this->DepotInitial;
    }
    public function setDepotInitial($DepotInitial)
    {
           $this->DepotInitial=$DepotInitial;
    }

        public function getDateOuverture()
    {
            return $this->DateOuverture;
    }
    public function setDateOuverture($DateOuverture)
    {
             $this->DateOuverture=$DateOuverture;
    }
       
}
    





