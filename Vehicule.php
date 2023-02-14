
<?php

class Vehicule {

    // déclaration des attributs
    private $couleur = "noir"; 
    private $poids = 1500;

    function __construct($couleur, $poids) {
        $this->couleur = $couleur;
        $this->poids = $poids;

    }

    // méthode publique
    public function rouler() { 
        return "Le véhicule roule";
       
    } 

    public function ajouter_personne($poids_personne) { 
        $this->poids += $poids_personne; 
    } 


    public function repeindre($couleur) {
        $this->couleur = $couleur;

    }
    public function getCouleur() {
        return $this->couleur;
    }


    public function mettre_essence($nombre_litre) {
        $this->poids += $nombre_litre;
    }
    public function getPoids() {
        return $this->poids;
    }


    public function ajouter_pneu_neige($nombre) {
        $this->nombre_pneu_neige += $nombre;
      }
    
    public function enlever_pneu_neige($nombre) {
        $this->nombre_pneu_neige -= $nombre;
      }
    
    public function getNombrePneuNeige() {
        return $this->nombre_pneu_neige;
      }
}

?>










