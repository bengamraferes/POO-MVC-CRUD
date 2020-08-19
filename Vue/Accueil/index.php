<?php $this->titre = "Mon Blog"; ?>
<div>
 <a href="accueil/ajouterEmployee">Ajouter un employee</a>
</div>
<table>
      <thead>
          <tr>
          <th colspan="1"> ID</th>
          <th colspan="1"> NOM</th>
          <th colspan="">PRENOM</th>
          <th colspan="">DATE CREATION</th>
          <th colspan="">DATE MISE A JOUR</th>
          <th colspan="">EMPLACEMENT</th>
          <th colspan="">ROLE</th>
          <th>EDITER</th>
          <th>SUPRIMER</th>
          </tr>
      </thead>
      <tbody>
      <?php  foreach ($tab as $employees):?>
      <tr>
      
         <td ><?=$this->nettoyer($employees['employee_id']); ?> </td>
         <td><?=$this->nettoyer($employees['employee_firstname']) ?></td>
         <td><?=$this->nettoyer($employees['employee_lastname']) ?></td>
         <td><?=$this->nettoyer($employees['employee_creation_date']) ?></td>
         <td><?=$this->nettoyer($employees['employee_update_date']) ?></td>
         <td><?=$this->nettoyer($employees['place_name_fr']) ?></td>
         <td><?=$this->nettoyer($employees['role_name_fr']) ?></td>
         
         <td><form method="post" action="accueil/editerEmployees">
            <input type="hidden" name="id" value="<?= $employees['employee_id']?>" />
            <input type="submit" value="Editer" />
            </form>
         </td>
         <td><form method="post" action="accueil/supprimer">
            <input type="hidden" name="id" value="<?=$employees['employee_id'] ?>" />
            <input id="supprimer" type="submit" value="Supprimer"/>
            </form>
         
      </tr>
         </td>
      <?php endforeach; ?>
      </tbody>
    </table>
    
