<div>
 <a href="emplacement/ajouterEmplacement">Ajouter un Emplacement </a>
</div>
<table>
      <thead>
          <tr>
          <th colspan="">Emplacement</th>
          <th>SUPPRIMER</th>
          </tr>
      </thead>
      <tbody>
      <?php  foreach ($tab as $emplacement):?>
      <tr>
         <td><?=$this->nettoyer($emplacement['place_name_fr']) ?></td>
         <td><form method="post" action="Emplacement/supprimer">
            <input type="hidden" name="id" value="<?=$emplacement['place_id'] ?>" />
            <input id="supprimer" type="submit" value="Supprimer"/>
            </form>
      </tr>
         </td>
      <?php endforeach; ?>
      </tbody>
    </table>