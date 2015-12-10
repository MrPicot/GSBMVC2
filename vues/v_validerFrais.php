      <form class="form-vertical" method="POST"  action="index.php?uc=validerFrais&action=validerFrais">
      <div class="corpsForm">
          
          <fieldset>
            </legend>
            <table>
                <td>Nom</td>
                <td>Prénom</td>
                <td>État</td>
			<?php
                        echo '<tr>';
				foreach ($lesVisiteurs as $unVisiteur)
				{
                                        echo '<td>'.$nomPersonne = $unVisiteur['nom'].'</td>';
					echo '<td>'.$prenomPersonne = $unVisiteur['prenom'].'</td>';
                                        echo '<td>'.$idEtat = $unVisiteur['idEtat'].'</td></tr>';			
				}
			?>	
            </table>
          </fieldset>
<?php 
    if (isset($_REQUEST['erreurs'])&& $_REQUEST['erreurForm']=="FraisForfait") 
    {    
        foreach($_REQUEST['erreurs'] as $erreur)
            {
             echo '<h3 class="text-danger">'.$erreur.'</h3>';
            }
     }
?>
      </div>
      <div class="piedForm">
      <p>                  
        <button type="submit" class="btn btn-primary">Valider</button>
        <button type="reset" class="btn btn-primary">Annuler</button>
      </p> 
      </div>
        
      </form>
     

  