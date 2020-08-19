<?php

require_once 'Framework/Modele.php';
class Employees extends Modele 
{
    public function read(){
        $sql = 'SELECT employee.* ,place.place_name_fr ,place.place_id, role.role_id,role.role_name_fr FROM employee LEFT JOIN place ON employee.place_id = place.place_id LEFT JOIN role ON employee.role_id = role.role_id ';
        $employees =  $this->executerRequete($sql);
        return $employees->fetchAll();
    }
    public function readSingle($id)
    {
        $sql = 'SELECT employee.* ,place.place_name_fr ,place.place_id, role.role_id,role.role_name_fr FROM employee LEFT JOIN place ON employee.place_id = place.place_id LEFT JOIN role ON employee.role_id = role.role_id  WHERE employee.employee_id = ?';
        $employees =  $this->executerRequete($sql ,array($id));
        return $employees->fetch();
    }
    public function updateSingle($id,$fName,$lName,$rId,$pId){
       $sql = 'UPDATE `employee` SET `employee_firstname`= ?,`employee_lastname`= ?,`employee_update_date`=NOW(),`role_id`=?,`place_id`=? WHERE employee_id = ?' ;
       $this->executerRequete($sql ,array($fName,$lName,$rId,$pId,$id));
    } 
    public function insertSingle($fName,$lName,$rId,$pId){
        $sql = 'INSERT INTO `employee`(`employee_id`, `employee_firstname`, `employee_lastname`, `employee_creation_date`, `employee_update_date`, `role_id`, `place_id`) VALUES (NULL,? , ?,NOW() ,NOW(),? ,?)';
        $this->executerRequete($sql ,array($fName,$lName,$rId,$pId));
    }
    function deleteSingle($id){
        $sql = 'DELETE FROM `employee` WHERE employee_id = ?';
        $this->executerRequete($sql ,array($id));
    }
}

?>