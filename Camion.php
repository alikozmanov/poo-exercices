
<?php

class Quatre_roues extends Camion {
    
    // déclaration des attributs
    private $longeur;

    // méthode publique
    public function ajouter_remorque($longueur_remorque) { 
        $this->longeur += $longueur_remorque;
    } 

}

?>