
<?php

class Quatre_roues extends Voiture {

    // déclaration des attributs
    private $nombre_pneu_neige;

    // méthode publique
    public function ajouter_pneu_neige($nombre) { 
        $this->nombre_pneu_neige += $nombre;
    } 

    public function enlever_pneu_neige($nombre) { 
        $this->nombre_pneu_neige -= $nombre;    
    } 

}

?>