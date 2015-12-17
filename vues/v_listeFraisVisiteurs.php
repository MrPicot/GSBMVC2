 <h2> Suivi des fiches de frais visiteurs par le comptable </h2>
 <br><br>
<table class="table table-bordered">

            <thead>
             <tr>
                <th class="mois">Mois</th>
                <th class="date">Date de modification</th>
                <th class='montant'>Montant validé</th> 
                <th class='etat'>État</th>    				
             </tr>
            </thead>
            <tbody>
        <?php      
          foreach ( $listeFraisVisiteurs as $unFraisVisiteur ) 
		  {
	
			$mois = $unFraisVisiteur['mois'];
	                $date = $unFraisVisiteur['dateModif'];
			$montantV = $unFraisVisiteur['montantValide'];
			$etat = $unFraisVisiteur['idEtat'];
		?>
		

             <tr>
                <td><?php echo $mois ?></td>
                <td><?php echo $date ?></td>
                <td><?php echo $montantV ?></td>
                <td><?php if ($etat=="RB"){echo "Remboursé"; } else if ($etat=="VA"){echo "Validé"; }  ?></td>			
             </tr>
            
			
	
			
			
        <?php 
          }
		?>
            </tbody>
    </table>











