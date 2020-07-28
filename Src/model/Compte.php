<?php
//code by judith
require_once './../../bootstrap.php';



class CompteDb
{
    public function Add($Compte)
    {
        //On donne à $db la fonction getEntity 
        // Et c'est plus facile car si on doit apporter un modifiera une seule fois
        $db = getEntity();
        $db->persist($Compte);
        $db->flush();
        
        return $Compte->getId();
    } 
}
