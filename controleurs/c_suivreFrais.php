<center>
<?php
 error_reporting(0);
include("vues/v_sommaire_comp.php");
$action = $_REQUEST['action'];
$idV = $_REQUEST['viListe'];
?>

<?php
switch($action){
	case 'selectionner':{
		$listeDesVisiteurs = $pdo->getLesVisiteurs();
		include("vues/v_listeDesVisiteurs.php");
		break;	
	}
	
	case 'apresSelect':{
	  $listeFraisVisiteurs = $pdo->getLesFraisVisiteurs($idV);
      include("vues/v_listeFraisVisiteurs.php");      
      break;
	}
}

?>
</center>