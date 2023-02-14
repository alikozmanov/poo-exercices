
<?php

class Vehicule extends Deux_roues {

    // déclaration des attributs
    private $cylindree;

    // méthode publique
    public function mettre_essence($nombre_litre) { 
        $this->reservoire += $nombre_litre;
    } 

}

?>