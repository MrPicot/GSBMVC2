    <!-- Division pour le sommaire -->
<div class="row">
      
    <nav class='col-md-2'>
        
        <h4>
            <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
        </h4>
        <h6>Bienvenue sur votre espace personnel,</h6>
        <h6>Vous êtes connectez en tant que comptable</h6>
        <br/>
        <ul class="list-unstyled">
			
           <li>
              <a href="#" title="Valider fiche de frais ">Valider fiche de frais</a>
              <br/>
           </li>
           <li>
              <a href="#" title="Suivre paiement des fiches de frais">Suivre paiement des fiches de frais</a>
              <br/>
           </li>
           <li>
              <a href="index.php?uc=creeVisiteur" title="création visiteur">Crée nouveau visiteur</a>
              <br/>
           </li>
 	   <li>
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
              <br/>
           </li>
         </ul>
        
    </nav>
    <div id="contenu" class="col-md-10">
        
    
    
