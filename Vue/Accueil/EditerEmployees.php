<h2>Vous etes entrain d'iditer un employee <?=$this->nettoyer( $tab["employee_firstname"]); ?> </h2>
<form action="accueil/modifier" method="post">
<p>NOM<input type="text" name ="fname" value =<?=$this->nettoyer( $tab['employee_firstname']); ?> ></p>
<p>PRENOM<input type="text" name ="lname" value =<?=$this->nettoyer( $tab['employee_lastname']); ?> ></p>
<p>EMPLACEMENT <label for="select">Choose:</label>
<select name="emplacement" id="pet-select">
<?php for($i = 0;$i<= count($tabPlaces)-1;$i++ ) :?>
    <option value="<?= $this->nettoyer($tabPlaces[$i]['place_id'])?>"<?php if($tabPlaces[$i]['place_id'] == $tab['place_id']){echo"selected";}else{ echo"ro";}?>><?= $this->nettoyer($tabPlaces[$i]['place_name_fr'])?></option>
 <?php endfor?>   
</select></p>
<p>ROLE  <label for="select">Choose:</label>
<select name="role" id="pet-select">
<?php foreach ($tabRoles as $roles) :?>
    <option value=<?= $this->nettoyer($roles['role_id'])?>><?= $this->nettoyer($roles['role_name_fr'])?></option>
 <?php endforeach?> 
</select></p></p>
<input type="hidden" name="id" value="<?= $tab['employee_id'] ?>" />
<p><button type="submit" name = "modifier">Modifier</button></p>
<?php

?>
