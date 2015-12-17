<form class="form-vertical" method="POST"  action="index.php?uc=validerFrais&action=validerFrais">
    <div class="corpsForm">

        <fieldset>

            <table>
                <th>Choisi</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>État</th>
                <th>ID</th>
                <th>Date</th>
                <?php
                error_reporting(0);
                echo '<tr>';
                foreach ($lesVisiteurs as $unVisiteur) {
                    echo '<td><input type="checkbox" name="id" value="id"></td>';
                    echo '<td>' . $nomPersonne = $unVisiteur['nom'] . '</td>';
                    echo '<td>' . $prenomPersonne = $unVisiteur['prenom'] . '</td>';
                    echo '<td>' . $idEtat = $unVisiteur['idEtat'] . '</td>';
                    echo '<td>' . $idVisiteur = $unVisiteur['idVisiteur'] . '</td>';
                    echo '<input type="hidden" name="idVisiteur" value ="'. $unVisiteur['idVisiteur'].'">';
                    echo '<td>' . $dateModif = $unVisiteur['dateModif'] . '</td></tr>';
                }
                ?>	
            </table>
        </fieldset>
        <?php
        if (isset($_REQUEST['erreurs']) && $_REQUEST['erreurForm'] == "FraisForfait") {
            foreach ($_REQUEST['erreurs'] as $erreur) {
                echo '<h3 class="text-danger">' . $erreur . '</h3>';
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


