<?php
ob_start();
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
require_once("fpdf/fpdf.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");break;
	}

	case'validerFicheFrais':{
		include("controleurs/c_validerFicheFrais.php");break;
	}
	case'afficherFicheFrais':{
		include("controleurs/c_afficherFicheFrais.php");break;
	}
	case'suivreFicheFrais':{
		include("controleurs/c_suivisFicheFrais.php");break;
	}

}
include("vues/v_pied.php") ;

?>