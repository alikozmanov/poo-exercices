
<?php

class Voiture extends Quatre_roues { 

    // déclaration des attributs
    private $nombre_pneu_neige;

    // méthode publique
    public function getNombrePneuNeige() {
        return $this->nombre_pneu_neige; 
    }
    
    public function setNombrePneuNeige($nombre_pneu_neige) {
        $this->nombre_pneu_neige = $nombre_pneu_neige; 
    }

    public function ajouter_pneu_neige($nombre) {

    }

    public function enlever_pneu_neige($nombre) {

    }

}
