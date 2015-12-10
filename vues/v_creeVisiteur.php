<?php
include("vues/v_sommaire_comp.php");?>

<div data-role="content" id="divinscription"> 
    <form id='frminscription' method="POST" action="index.php?uc=index.php?uc=creeVisiteur&action=ajoutVisiteur" >
     <div data-role="fieldcontain" id ="champsinscription">
        <label for="nom">Nom </label>
        <input type="text" name="nom" id="nom" value="" class="required"/>
        <br/>
        <br/>
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
        <br/><br/>
          <input type="submit" name="submit" id="btninscription" value="Inscrire"  />
     </div>
    </form>
</div><!-- fin content-->