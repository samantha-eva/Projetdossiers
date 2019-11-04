<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idComptable = $_SESSION['idComptable'];
$a = array();

switch($action){
	case 'selectionnerVisiteurs':
	{
		$lesVisiteurs =$pdo->getLesVisiteursDuComptable($idComptable);
		$lesMois= $pdo->getLesMoisDisponibles();

		include("vues/v_validerFicheFrais.php");
	}
		break;

	
}
?>