
<?php

class Quatre_roues extends Camion {
    
    // déclaration des attributs
    private $longeur = 12;

    // méthode publique
    public function ajouter_remorque($longueur_remorque) { 
        $this->longeur += 8;
    } 

}

?>