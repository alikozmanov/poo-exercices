
<?php

class Voiture extends Quatre_roues
{ 
   
    private $nombre_pneu_neige;


    public function getNombrePneuNeige()
    {
        return $this->nombre_pneu_neige; 
    }
    public function setNombrePneuNeige($nombre_pneu_neige)
    {
        $this->nombre_pneu_neige = $nombre_pneu_neige; 
    }


    public function ajouter_pneu_neige($nombre)
    {

    }

    public function enlever_pneu_neige($nombre)
    {

    }

}
