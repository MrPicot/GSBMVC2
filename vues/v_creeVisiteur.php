<?php
include("vues/v_sommaire_comp.php");?>

<div data-role="content" id="divinscription"> 
    <form id='frminscription' method="POST" action="index.php?uc=index.php?uc=creeVisiteur&action=ajoutVisiteur" >
     <div data-role="fieldcontain" id ="champsinscription">
        <h2>Formulaire pour ajouter un visiteur</h2>
        <br/>
        <br/>
        <label for="nom">Id</label>
        <input type="text" name="id" id="nom" value="" class="required"/>
        <br/>
        <label for="nom">Nom </label>
        <input type="text" name="nom" id="nom" value="" class="required"/>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" value="" class="required"/>
        <br/>
        <br/>
        <label id="adr">Adresse</label>
        <input type="text" name="mail" id="adr" value=""/>
        <br/>
        <label id="cp">Code Postal</label>
        <input type="text" name="cp" id="cp" value="" class="required" />
        <br/>
        <label id="ville">Ville</label>
        <input type="text" name="ville" id="ville" value="" class="required" />
        <br/>
        <br/>
        <label id="datembauche">Date Embauche</label>
        <input type="date" name="datembauche" id="datembauche" value="" class="required" />
        <br/><br/>
          <input type="submit" name="submit" id="btninscription" value="Inscrire"  />
     </div>
    </form>
</div><!-- fin content-->
