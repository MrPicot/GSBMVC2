<?php
error_reporting(0);
include("vues/v_sommaire_comp.php");
$action = $_REQUEST['action'];
$idVisiteur = $_REQUEST['idVisiteur'];
switch ($action) {
    case 'validerFrais': {
            $lesVisiteurs = $pdo->getLesVisiteursAValider();
            $lesFichesAValider = $pdo->validerFicheFrais($idVisiteur);
            include("vues/v_validerFrais.php");
            break;
        }
}
?>