<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'ajoutVisiteur';
}
$action = $_REQUEST['action'];
switch($action){
    
        case'demandeajout':{
            include("vues/v_creeVisiteur.php");
            break;
        }
    
	case 'ajoutVisiteur':{   
           if (isset($_REQUEST['nom']) | isset($_REQUEST['prenom']) | isset($_REQUEST['adr']) | isset($_REQUEST['cp']) | isset($_REQUEST['ville']) | isset($_REQUEST['datembauche'])){
               
                $id=$_REQUEST['id'];
                $nom=$_REQUEST['nom'];
                $prenom=$_REQUEST['prenom'];
                $adresse=$_REQUEST['adr'];
                $cp=$_REQUEST['cp'];
                $ville=$_REQUEST['ville'];
                $datembauche=$_REQUEST['datembauche'];  
                
                
                $new_visiteur = $pdo->inscriptVisiteur($id,$nom,$prenom,$adresse,$cp,$ville,$datembauche);
                break;
        }
        }  
        
        default :{
		include("vues/v_creeVisiteur.php");
		break;
	}
}
?>

