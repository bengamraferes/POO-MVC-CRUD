<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Role.php';

class ControleurRole extends Controleur {

    private $roles;

    public function __construct() {
        $this->roles = new Role();
    }
    public function index() {
        $tabRoles = $this->roles->read(); 
        $this->genererVue(array('tab' => $tabRoles));
    }
    public function ajouterRole(){
        $this->genererVue();
    }
    public function ajouter(){
        $roleNameFr = $this->requete->getParametre("rolefr");
        $roleNameAn = $this->requete->getParametre("rolean");
        $this->roles->insertSingle($roleNameFr, $roleNameAn);
        $this->rediriger("Role", "index");
    }
    public function supprimer(){
        $id = $this->requete->getParametre("id");
        $this->roles->deleteSingle($id);
        $this->rediriger("Role", "index");
    }

}

?>