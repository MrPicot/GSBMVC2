<?php
include("vues/v_sommaire_comp.php");
$action = $_REQUEST['action'];
switch($action){
        case 'validerFrais':{
		$lesVisiteurs = $pdo->getLesVisiteursAValider();
                include("vues/v_validerFrais.php");
		break;
	}
}
?>