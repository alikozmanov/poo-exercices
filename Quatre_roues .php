
<?php

class Vehicule extends Quatre_roues {

    // déclaration des attributs
    private $nombre_porte; 

    // méthode publique
    public function repeindre($couleur) { 
        $this->couleur = $couleur;
    } 
  
}

?>