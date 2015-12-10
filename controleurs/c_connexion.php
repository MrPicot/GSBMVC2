<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		
		$visiteur = $pdo->getInfosVisiteur($login,$mdp);
		
		if(!is_array( $visiteur)){

		    $comptable = $pdo->getInfosComptable($login,$mdp);
			
			 if(!is_array($comptable)) {       
                          ajouterErreur("Login ou mot de passe incorrect","formulaireconnect");
                           
                            include("vues/v_connexion.php");
                        }
			else{
                                $id = $comptable['id'];
                                $nom = $comptable['nom'];
                                $prenom = $comptable['prenom'];
  
                                $date=$comptable['date'];
                                connecter($id,$nom,$prenom,$date);
                                include("vues/v_sommaire_comp.php");
                        }		
}						
		
		else{
			$id = $visiteur['id'];
			$nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
                        
                        $date=$visiteur['date'];
			connecter($id,$nom,$prenom,$date);
			include("vues/v_sommaire.php");
		} 
               $pdo->updateDateco($login);
		break;
                
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>