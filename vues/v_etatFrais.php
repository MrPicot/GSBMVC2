<script type="text/javascript"> 
function motifSuppr(thingId) 
{ 
var targetElement; 
targetElement = document.getElementById(thingId) ; 
if (targetElement.style.display == "none") 
{ 
targetElement.style.display = "" ; 
} else { 
targetElement.style.display = "none" ; 
} 
} 
</script> 



<h2>Fiche de frais du mois <?php echo $numMois."-".$numAnnee?> : </h2>
    <p>
        <strong>Etat : </strong>   
            <?php echo $libEtat?> depuis le <?php echo $dateModif?> <br> 
            <strong> Montant des frais :</strong> <span class="label label-info">  <?php echo $montantValide?> </span>            
                 
    </p>
  	<table class="table table-bordered">
  	   <caption>Eléments forfaitisés </caption>
           <thead>
              <tr>
                  <?php

        
        ?>
                  
         <?php
         foreach ( $lesFraisForfait as $unFraisForfait ) 
		 {
			$libelle = $unFraisForfait['libelle'];
		?>	
			<th> <?php echo $libelle?></th>
		 <?php
        }
       
    
		?>
		</tr>
            </thead>
            <tbody>
                <tr>
        <?php
          foreach (  $lesFraisForfait as $unFraisForfait  ) 
		  {
				$quantite = $unFraisForfait['quantite'];
                                
		?>
        
                <td class="qteForfait" ><?php echo $quantite?> </td>
            
             
		 <?php
          }
		?>
		</tr>
            </tbody>
    </table><br>
     <?php 
     if (!empty($lesFraisHorsForfait)) {                  
     
     ?>
  	<table class="table table-bordered">
  	   <caption>Descriptif des éléments hors forfait -<?php echo $nbJustificatifs ?> justificatifs reçus -
       </caption>
            <thead>
             <tr>
                <th class="date">Date</th>
                <th class="libelle">Libellé</th>
                <th class='montant'>Montant</th> 
                <th class='montant'>Supprimé</th>    				
             </tr>
            </thead>
            <tbody>
        <?php      
          foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) 
		  {
	
			$motifSuppr = $unFraisHorsForfait['motifSuppression'];
			$supprime = $unFraisHorsForfait['supprimer'];
			$date = $unFraisHorsForfait['date'];
			$libelle = $unFraisHorsForfait['libelle'];
			$montant = $unFraisHorsForfait['montant'];
			
			
		?>
		

             <tr onclick="javascript:motifSuppr('id_div_1'); return false;">
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
                <td <?php if ($supprime=="Oui") {echo "bgcolor='#FA5858'" ;} ?>><?php if ($supprime=="") {echo "Champ non renseigné";} else {echo $supprime;} ?></td>				
             </tr>
            
			
			<div id="id_div_1" style="display:none;"> 
		<h3>Motif de la suppression par le comptable: </h3>
             <?php
			 echo $motifSuppr;
			 ?>
        </div> 
			
			
        <?php 
          }
		?>
            </tbody>
    </table>
     <?php 
     }
     else {
         echo "<strong>Vous n'avez pas d'élément hors forfait pour ce mois.</strong>";
     }
		?>
  </div>
 













