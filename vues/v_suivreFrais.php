<div id="contenu">
<h2>Mes fiches de frais</h2>


<form method="POST" action="index.php?uc=suivreFicheFrais&action=suivisFicheFrais">

    <button type="submit" name="rembourser" style="width:80px;">Remboursé</button>
    <button type="submit" name="mettre_en_paiement" style="width:80px;height:40px;">Mettre en paiement</button>

    <table class="listeLegere">
            <tr>
            <th class=""><input type="checkbox" id="Toutcocher"></th>
                <th class="date">Visiteur</th>
                <th class="etat">dateModif</th>
                <th class="montant">Montant Validé</th>
                <th class="etat">Etat</th>
                <th class="action">voir &nbsp;</th>  
            <?php   
        
             foreach ($lstVisiteur as $visiteur) 
               {
         ?>	
         <tr>
              <td><input type="checkbox" name="checkbox[]" value="<?php echo $visiteur['mois'].$visiteur['etat'].$visiteur['id']?>"></td>
                <td><?php echo $visiteur['nom'] . "-" .$visiteur['prenom'] ?></td>
                <td><?php echo $visiteur['dateModif']?></td>
                <td><?php echo $visiteur['montantValide']?></td>
                <td><?php echo $visiteur['etat']?></td> 
                <td><a href="index.php?uc=suivreFicheFrais&action=voirDetailFiche&visiteur=<?php echo $visiteur['id'] ?>&mois=<?php echo $visiteur['mois'] ?>"">Consulter</a></td>
                
                </tr>
                
                <?php		 
          
        }

  ?>
  </table>	
</form>
        
    
 </div>



