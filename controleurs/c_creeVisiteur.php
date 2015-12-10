<?php
$action = $_REQUEST['action'];
include("vues/v_creeVisiteur.php");

switch($action){
    
	case 'ajoutVisiteur':{   
           if (isset($_REQUEST['nom']) | isset($_REQUEST['prenom']) | isset($_REQUEST['adr']) | isset($_REQUEST['cp']) | isset($_REQUEST['ville']) | isset($_REQUEST['datembauche'])){
               
                $nom=$_POST['nom'];
                $prenom=$_REQUEST['prenom'];
                $adresse=$_REQUEST['adr'];
                $cp=$_REQUEST['cp'];
                $ville=$_REQUEST['ville'];
                $datembauche=$_REQUEST['datembauche'];                 
            }
            else{

            } 
            
        }  
}
?>

