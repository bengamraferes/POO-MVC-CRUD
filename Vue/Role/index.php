<div>
 <a href="role/ajouterRole">Ajouter un Role </a>
</div>
<table>
      <thead>
          <tr>
          <th colspan="">ROLE</th>
          <th>SUPPRIMER</th>
          </tr>
      </thead>
      <tbody>
      <?php  foreach ($tab as $role):?>
      <tr>
         <td><?=$this->nettoyer($role['role_name_fr']) ?></td>
         <td><form method="post" action="role/supprimer">
            <input type="hidden" name="id" value="<?=$role['role_id'] ?>" />
            <input id="supprimer" type="submit" value="Supprimer"/>
            </form>
      </tr>
         </td>
      <?php endforeach; ?>
      </tbody>
    </table>