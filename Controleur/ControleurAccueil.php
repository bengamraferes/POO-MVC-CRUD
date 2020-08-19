<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Employees.php';
require_once 'Modele/Emplacement.php';
require_once 'Modele/Role.php';

class ControleurAccueil extends Controleur {

    private $employees;
    private $places;
    private $roles;

    public function __construct() {
        $this->employees = new Employees();
        $this->places = new Place();
        $this->roles = new Role();
    }
    public function index() {
        $tabEmployees = $this->employees->read(); 
        $this->genererVue(array('tab' => $tabEmployees));
    }
    public function editerEmployees(){
        $id = $this->requete->getParametre("id");
        $employee = $this->employees->readSingle($id); 
        $tabPlaces = $this->places->read(); 
        $tabRoles = $this->roles->read(); 
        $this->genererVue(array('tab' => $employee,'tabPlaces' => $tabPlaces,'tabRoles' => $tabRoles));
    }
    public function modifier(){
        $id = $this->requete->getParametre("id");
        $fName = $this->requete->getParametre("fname");
        $lName = $this->requete->getParametre("lname");
        $pId = $this->requete->getParametre("emplacement");
        $rId = $this->requete->getParametre("role");
        echo $id;
       $this->employees->updateSingle($id,$fName,$lName,$rId,$pId);
       $this->rediriger("Accueil", "index");
    }
    public function ajouterEmployee(){
        $tabPlaces = $this->places->read(); 
        $tabRoles = $this->roles->read(); 
        $this->genererVue(array('tabPlaces' => $tabPlaces,'tabRoles' => $tabRoles));
    }
    public function ajouter(){
        $fName = $this->requete->getParametre("fname");
        $lName = $this->requete->getParametre("lname");
        $pId = $this->requete->getParametre("emplacement");
        $rId = $this->requete->getParametre("role");
        $this->employees->insertSingle($fName,$lName,$rId,$pId);
        $this->rediriger("Accueil", "index");
    }
    public function supprimer(){
        $id = $this->requete->getParametre("id");
        $this->employees->deleteSingle($id);
        $this->rediriger("Accueil", "index");
    }

}
?>
