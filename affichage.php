
<?php

// Chargement 
include("Vehicule.php");

class Vehicule {
    public $couleur = "noir";
    public $poids = 1500;

    public fonction rouler () {
        echo "le véhicule roule";
    }

    $mon_Vehicule = new Vehicule();
    $mon_Vehicule->poids += 70;
    echo "le nouveau poids du vehicule est de ". $mon_Vehicule->poids . "kg";

}
?>