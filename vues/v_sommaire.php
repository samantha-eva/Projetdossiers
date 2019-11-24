    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
				  Comptable :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			
 	   
		   <li class="smenu">
              <a href="index.php?uc=validerFicheFrais&action=selectionnerVisiteurs" title="validation des fiches de frais">Validation des fiches de frais</a>
           </li>
		   <li class="smenu">
              <a href="index.php?uc=suivreFicheFrais&action=suivisFicheFrais" title="Suivis des fiches de frais">Suivis des fiches de frais </a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Deconnexion</a>
           </li>
         </ul>
        
    </div>