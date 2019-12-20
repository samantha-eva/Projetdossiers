<div id="contenu">
      <h2>Renseigner ma fiche de frais du mois <?php echo $numMois."-".$numAnnee. " ".$visiteur?></h2>
    <h3> Frais Forfait </h3>
      <form method="POST" action="index.php?uc=afficherFicheFrais&action=afficher>
      <input type="hidden" value="<?php echo $visiteur?>" name="lstVisiteur">
      <input type='hidden' value="<?php echo $mois?>"name="lstMois">
     

    
 
      <div class="corpsForm">
      <p>
     
        Etat : <?php echo $libEtat?> depuis le <?php echo $dateModif?> <br> Montant validé : <?php echo $montantValide?>
              
                     
    </p>
          <fieldset>
            <legend>Elements forfaitises
            </legend>
		
	
    <?php
				foreach ($lesFraisForfait as $unFrais)
				{
					$idFrais = $unFrais['idfrais'];
					$libelle = $unFrais['libelle'];
					$quantite = $unFrais['quantite'];
			?>
      	<table class="listeLegere">
			   <tr>
            <td><?php echo $libelle?> </td>
              </tr>
              <tr>
            <td><?php echo $quantite?> </td>
              </tr>
				
			</table>
			<?php
				}
			?>
           
          </fieldset>
      </div>
    
        
      </form>

      <h3>Les Frais  hors forfait</h3>
      
      <table class="listeLegere">
  	   <caption>Descriptif des éléments hors forfait-<?php echo $nbJustificatifs ?> justificatifs reçus 
       </caption>
             <tr>
                <th class="date">Date</th>
				        <th class="libelle">Libellé</th>  
                <th class="montant">Montant</th>  
             </tr>

             <?php   
             
	    foreach ($lesFraisHorsForfait as $unFraisHorsForfait) 
	  	{
			$libelle = $unFraisHorsForfait['libelle'];
			$date = $unFraisHorsForfait['date'];
			$montant=$unFraisHorsForfait['montant'];
			$idFraisHorsForfait = $unFraisHorsForfait['id'];
	?>	
  <tr>
                <td> <?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
            
             </tr>
             <?php		 
          
          }

	?>	
 
   </table>    
  
      

   





  