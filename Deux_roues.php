
<?php

class Deux_roues extends Vehicule {
    
    // déclaration des attributs
    private $cylindree;

    // méthode publique
    public function getCylindree() {
        return $this->cylindree; 
    } 
    
    public function setCylindree($cylindree) {
        $this->cylindree = $cylindree; 
    }

    public function mettre_essence($nombre_litre) {

    }

}