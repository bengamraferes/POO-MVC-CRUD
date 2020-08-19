<?php

require_once 'Framework/Modele.php';
class Place extends Modele 
{
    public function read(){
        $sql = 'SELECT * FROM `place`';
        $places =  $this->executerRequete($sql);
        return $places->fetchAll();
    } 
    public function insertSingle($placeNameFr, $placeNameAn){
        $sql = 'INSERT INTO `place`(`place_id`, `place_name_en`, `place_name_fr`) VALUES (NULL,?,?)';
        $this->executerRequete($sql ,array($placeNameFr,$placeNameAn));
    }
    function deleteSingle($id){
        $sql = 'DELETE FROM `place` WHERE place_id = ?';
        $this->executerRequete($sql ,array($id));
    }
}

?>