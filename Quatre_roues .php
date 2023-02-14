
<?php 

class Quatre_roues extends Vehicule {
    
    // déclaration des attributs
    private $nombre_porte;

    // méthode publique
    public function getNombrePorte() {
        return $this->nombre_porte; 
    }
    
    public function setNombrePorte($nombre_porte) {
        $this->nombre_porte = $nombre_porte; 
    }

 
    public function repeindre($couleur) {

    }
 
}
