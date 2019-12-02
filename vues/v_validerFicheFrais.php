
<?php #$lesVisiteurs=$pdo->getLesVisiteursDuComptable($idComptable);?>
<?php #$lesMois=$pdo->getLesMoisDisponibles(); ?>

<div id="contenu">
      <h2>Mes fiches de frais</h2>
      <h3> Visiteur et mois  à sélectionner : </h3>
      <form action="index.php?uc=afficherFicheFrais&action=afficher" method="post">
      <div class="corpsForm">

<p>
	             
        <label for="lstVisiteur">Visiteurs : </label>
        <select id="lstVisiteur" name="lstVisiteur">
            <?php
			
			foreach($lesVisiteurs as $unVisiteur){
				?>
      
				<option value="<?php echo $unVisiteur['id']; ?>"><?php echo $unVisiteur['nom']. $unVisiteur['prenom'];?></option>
				<?php
			}
	
		   ?>  
  			
        </select>
        
      </p>

      <p>
      <label for="lstMois">Mois : </label>
      <select id="lstMois" name="lstMois">

            <?php
                    
        foreach ($lesMois as $unMois){
        ?>
     
        	<option value="<?php echo $unMois['mois']; ?>"><?php echo $unMois['mois']; ?></option>
				<?php
			}
	
		   ?> 
	  </select>
    </p>
    </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
	  

	                   
      </form>
	  </div>
