<?php
include("vues/v_sommaire_comp.php");
$action = $_REQUEST['action'];
?>
<center>
<?php
switch($action){
	case 'selectionner':{
		$listeDesVisiteurs = $pdo->getLesVisiteurs();
		include("vues/v_listeDesVisiteurs.php");
		break;	
	}
	
	case 'apresSelect':{
	  $listeFraisVisiteurs = $pdo->getLesFraisVisiteurs();
      include("vues/v_listeFraisVisiteurs.php");      
      break;
	}
}
?>
</center>