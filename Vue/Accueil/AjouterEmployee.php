<h2>Vous êtes entrain D'ajouter un employee  </h2>
<form action="accueil/ajouter" method="post">
<p>NOM<input type="text" name ="fname" value ="Firstname" ?> ></p>
<p>PRENOM<input type="text" name ="lname" value = "Lastname"></p>
<p>EMPLACEMENT <label for="select">Choose:</label>
<select name="emplacement" id="pet-select">
<?php foreach ($tabPlaces as $emplacement) :?>
    <option value=<?= $this->nettoyer($emplacement['place_id'])?>><?= $this->nettoyer($emplacement['place_name_fr'])?></option>
 <?php endforeach?>   
</select></p>
<p>ROLE  <label for="select">Choose:</label>
<select name="role" id="pet-select">
<?php foreach ($tabRoles as $roles) :?>
    <option value=<?= $this->nettoyer($roles['role_id'])?>><?= $this->nettoyer($roles['role_name_fr'])?></option>
 <?php endforeach?> 
</select></p></p>

<p><button type="submit" name = "ajouter">Ajouter</button></p>