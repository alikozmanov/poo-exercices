
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


  
  $poids_voiture = 1400; // poids initial de la voiture en kg
  $poids_personne = 65; // poids de chaque personne en kg
  $nb_personnes = 2; // nombre de personnes dans la voiture
  $couleur_voiture = "verte"; // couleur de la voiture

  $poids_total = $poids_voiture + ($poids_personne * $nb_personnes); // calcul du nouveau poids total
  echo "La voiture $couleur_voiture pèse maintenant $poids_total kg."; // affichage du résultat


}
?>