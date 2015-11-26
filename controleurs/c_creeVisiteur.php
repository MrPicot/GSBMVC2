<?php
include("vues/v_sommaire_comp.php");?>

<div data-role="content" id="divinscription"> 
    <form action="#" rel="external" id='frminscription' >
     <div data-role="fieldcontain" id ="champsinscription">
        <label for="nom">Nom </label>
        <input type="text" name="nom" id="nom" value="" class="required"/>
        <br/>
        <br/>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" value="" class="required"/>
        <br/>
        <br/>
        <label for="mail">Mail</label>
        <input type="text" name="mail" id="mail" value="" class="required email" />
        <br/>
        <label id="message"></label>
        <br/><br/>
          <input type="submit" name="submit" id="btninscription" value="Inscrire"  />
     </div>
    </form>
</div><!-- fin content-->