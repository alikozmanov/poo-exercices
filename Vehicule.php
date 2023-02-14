
<?php

class Vehicule {

    // déclaration des attributs
    private $couleur = "noir"; 
    private $poids = 1500;


    // méthode publique
    public function rouler() { 
        return "Le véhicule roule";
       
    } 

    public function ajouter_personne($poids_personne) { 
        $this->poids += $poids_personne; 
    } 
}

?>










