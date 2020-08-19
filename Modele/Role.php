<?php

require_once 'Framework/Modele.php';
class Role extends Modele 
{
    public function read(){
        $sql = 'SELECT * FROM `role`';
        $roles =  $this->executerRequete($sql);
        return $roles->fetchAll();
    } 
    public function insertSingle($roleNameFr, $roleNameAn){
        $sql = 'INSERT INTO `role`(`role_id`, `role_name_en`, `role_name_fr`) VALUES (NULL,?,?)';
        $this->executerRequete($sql ,array($roleNameFr,$roleNameAn));
    }
    function deleteSingle($id){
        $sql = 'DELETE FROM `role` WHERE role_id = ?';
        $this->executerRequete($sql ,array($id));
    }
}

?>