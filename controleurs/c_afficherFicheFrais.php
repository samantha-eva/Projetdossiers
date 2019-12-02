<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idComptable = $_SESSION['idComptable'];
$infos = array();

switch($action){
    case 'afficher':{
        
        if(isset($_POST['lstMois']) and isset($_POST['lstVisiteur']))
        {
            $_SESSION['lstMois'] = $_POST['lstMois'];
            $_SESSION['lstVisiteur'] = $_POST['lstVisiteur'];
            $numAnnee = substr($_POST['lstMois'],0,4);
            $numMois = substr($_POST['lstMois'], 4,2);
            $visiteur = $_POST['lstVisiteur'];
            $mois= $_POST['lstMois'];
        
            if(isset($_POST['valider']))
            {
                $lesFrais = $_REQUEST['lesFrais'];   
                if(lesQteFraisValides($lesFrais))
                {
                
                    $pdo->majFraisForfait($visiteur,$mois,$lesFrais);
                    
                }
                else
                {
                    ajouterErreur("Les valeurs des frais doivent être numériques");
                    include("vues/v_erreurs.php");
                }
            }

           

            $lesFraisForfait = $pdo->getLesFraisForfait($_POST['lstVisiteur'], $_POST['lstMois']);
            $lesFraisHorsForfait= $pdo->getLesFraisHorsForfait($visiteur, $mois);
            $lesInfosFicheFrais= $pdo->getLesInfosFicheFrais($visiteur,$mois);
            $libEtat = $lesInfosFicheFrais['libEtat'];
		    $montantValide = $lesInfosFicheFrais['montantValide'];
		    $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		    $dateModif =  $lesInfosFicheFrais['dateModif'];
            $dateModif =  dateAnglaisVersFrancais($dateModif);
            include('vues/v_afficherFicheFrais.php');
        
        }
        
        break;		
    	
    }
    case "supprimerFrais":{
        
            
            $idFrais = $_REQUEST['idFrais'];
            //$pdo->supprimerFraisHorsForfait($idFrais);
            //header("location:".  $_SERVER['HTTP_REFERER']); 
          
           
            $pdo->supprimerFraisHorsForfait($idFrais);
            $visiteur = $_SESSION['lstVisiteur'];
            $mois = $_SESSION['lstMois'];
            $numAnnee = substr($visiteur,0,4);
            $numMois = substr($mois, 4,2);
            $lesFraisForfait = $pdo->getLesFraisForfait($visiteur, $mois);
            $lesFraisHorsForfait= $pdo->getLesFraisHorsForfait($visiteur, $mois);
            $lesInfosFicheFrais= $pdo->getLesInfosFicheFrais($visiteur,$mois);
            $libEtat = $lesInfosFicheFrais['libEtat'];
		    $montantValide = $lesInfosFicheFrais['montantValide'];
		    $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		    $dateModif =  $lesInfosFicheFrais['dateModif'];
		    $dateModif =  dateAnglaisVersFrancais($dateModif);
            include('vues/v_afficherFicheFrais.php');
        
        break;
    
    }
    case'validerFrais':{
        
           
        $visiteur = $_SESSION['lstVisiteur'];
        $mois = $_SESSION['lstMois'];
        $numAnnee = substr($visiteur,0,4);
        $numMois = substr($mois, 4,2);
        $lesFraisForfait = $pdo->getLesFraisForfait($visiteur, $mois);
        $lesFraisHorsForfait= $pdo->getLesFraisHorsForfait($visiteur, $mois);
        $lesInfosFicheFrais= $pdo->getLesInfosFicheFrais($visiteur,$mois);
   
        $libEtat = $lesInfosFicheFrais['libEtat'];        
        $montantValide = $lesInfosFicheFrais['montantValide'];
        $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
        $dateModif =  $lesInfosFicheFrais['dateModif'];
        $dateModif =  dateAnglaisVersFrancais($dateModif);
        $pdo->majFicheFrais($visiteur, $mois, "VA");
        
        include('vues/v_afficherFicheFrais2.php');
    break;
        
 }
 case'validerReporter':{

    $visiteur = $_SESSION['lstVisiteur'];
    $mois = $_SESSION['lstMois'];
    $numAnnee = substr($visiteur,0,4);
    $numMois = substr($mois, 4,2);
    $lesFraisForfait = $pdo->getLesFraisForfait($visiteur, $mois);
    $lesFraisHorsForfait= $pdo->getLesFraisHorsForfait($visiteur, $mois);
    $lesInfosFicheFrais= $pdo->getLesInfosFicheFrais($visiteur,$mois);
    $libEtat = $lesInfosFicheFrais['libEtat'];
    $pdo->majFicheFrais($visiteur, $mois, "VA");
    $montantValide = $lesInfosFicheFrais['montantValide'];
    $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
    $dateModif =  $lesInfosFicheFrais['dateModif'];
    $dateModif =  dateAnglaisVersFrancais($dateModif);
 
    $idFrais = $_REQUEST['idFrais'];
    $date = $_REQUEST['date'];
    $pdo->repoterLeMois($idFrais,$date);
   // header("location:".  $_SERVER['HTTP_REFERER']); 
   include('vues/v_afficherFicheFrais.php');

 break;
    }

}

?>