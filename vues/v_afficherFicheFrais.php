<div id="contenu">
      <h2>Renseigner ma fiche de frais du mois <?php echo $numMois."-".$numAnnee. " ".$visiteur?></h2>
    <h3> Frais Forfait </h3>
      <form method="POST" action="index.php?uc=afficherFicheFrais&action=afficher">
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
    
					<p>
						<label for="idFrais"><?php echo $libelle ?></label>
						<input type="text" id="idFrais" name="lesFrais[<?php echo $idFrais?>]" size="10" maxlength="5" value="<?php echo $quantite?>" >
					</p>
			
			<?php
				}
			?>
           
          </fieldset>
      </div>
      <div class="piedForm">
      <p>
        <input  type="submit" name="valider" size="20"  onclick="return confirm('Les frais Forfaitisés sont actualisés!\n cliquez sur ok pour continuer.*');"  value="Actualiser"/>
        <?php 
       
       ?>
      
          
         
  
      </p> 
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
                <th class="montant">Supprimer</th>  
                <th class="montant">Reporter</th>  
 
                <th class="action">&nbsp;</th>              
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

                <td><a href="index.php?uc=afficherFicheFrais&action=supprimerFrais&idFrais=<?php echo $idFraisHorsForfait ?>" 
				onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');">Supprimer ce frais</a></td>

        <td><a href="index.php?uc=afficherFicheFrais&action=validerReporter&idFrais=<?php echo $idFraisHorsForfait; ?>&date=<?php echo $date; ?>">Reporter </a></td>
            
             </tr>
             <?php		 
          
          }

	?>	
 
   </table>    
   <form action="index.php?uc=afficherFicheFrais&action=validerFrais" method="post">
   
    <button type="submit" name="validerFiche" value="validerFiche">Valider </button>


   
    </form>
      
