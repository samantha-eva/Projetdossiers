<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idComptable = $_SESSION['idComptable'];

switch($action){
	case 'suivisFicheFrais':
	{
        
	
        if(isset($_POST['rembourser']) and isset($_POST['checkbox']))
        {
            foreach($_POST['checkbox'] as $infos)
            {
                $numMois = substr($infos,0,6);
                $id = substr($infos, 8, 4);
                
                $pdo->majFicheFrais($id, $numMois, "RB");
            }
        }
        elseif(isset($_POST['mettre_en_paiement'])and isset ($_POST['checkbox']))
        {
           
            foreach($_POST['checkbox'] as $infos)
            {

                $numMois = substr($infos,0,6);
                $id = substr($infos, 8,4);
                $idEtat=substr($infos, 6,2);
                
            
                if(strcmp($idEtat,'RB') == 0)
                {
                   
                    $pdo->majFicheFrais($id, $numMois, 'MP'); 
                    echo '<script>alert("La fiche a bien été payée");</script>';
                   
                    
                
                }
            }
        }
        

    
        $lstVisiteur =$pdo->getLesVisiteursDuComptableVa($idComptable);
    
        include("vues/v_suivreFrais.php");
        
    
        break;
    
    }
    case'voirDetailFiche':{
        ob_end_clean();
        $visiteur = $_REQUEST["visiteur"];
        $mois = $_REQUEST["mois"];
        
        $fraisforfait = $pdo->getLesFraisForfait($visiteur, $mois);
        $fraishorsforfait = $pdo->getLesFraisHorsForfait($visiteur, $mois);
        $lstVisiteur=$pdo->getLesVisiteursBy($visiteur); 
        $lesInfosFicheFrais= $pdo->getLesInfosFicheFrais($visiteur,$mois);
        //$libEtat = $lesInfosFicheFrais['libEtat'];


        
          include("vues/v_detailFiche.php");
            
    }
    
}
?>


               
