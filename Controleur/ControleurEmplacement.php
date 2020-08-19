<?php
require_once 'Framework/Controleur.php';
require_once 'Modele/Emplacement.php';

class ControleurEmplacement extends Controleur {

    private $places;

    public function __construct() {
        $this->places = new Place();
    }
    public function index() {
        $tabPlaces = $this->places->read(); 
        $this->genererVue(array('tab' => $tabPlaces));
    }
    public function ajouterEmplacement(){
        $this->genererVue();
    }
    public function ajouter(){
        $placeNameFr = $this->requete->getParametre("placefr");
        $placeNameAn = $this->requete->getParametre("placean");
        $this->places->insertSingle($placeNameFr, $placeNameAn);
        $this->rediriger("Emplacement", "index");
    }
    public function supprimer(){
        $id = $this->requete->getParametre("id");
        $this->places->deleteSingle($id);
        $this->rediriger("Emplacement", "index");
    }
}
?>