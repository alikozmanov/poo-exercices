<?php

class Camion extends Quatre_roues {
    
    // déclaration des attributs
    private $longueur;

    // méthode publique
    public function getLongueur() {
        return $this->longueur; 
    }
    
    public function setLongueur($longueur) {
        $this->longueur = $longueur; 
    }

    public function ajouter_remorque($longueur_remorque) {

    }

}
