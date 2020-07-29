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
     * One clientparticulier has many compte. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Clientparticulier", mappedBy="numeroCompte")
     */
    private $idClientPhysique;


     /**
     * One clientEntreprise has many compte. This is the inverse side.
     * @ORM\OneToMany(targetEntity="ClientEntreprise", mappedBy="numeroCompte")
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
    





