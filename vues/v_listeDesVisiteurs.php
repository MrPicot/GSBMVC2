 <h2> Suivi des paiements par le comptable </h2>

    <form action="index.php?uc=suivreFrais&action=apresSelect" method="post">
       <h3>Sélectionnez un visiteur pour afficher sa fiche de frais : </h3>
            <p>              
                <select id="viListe" name="viListe"> 
                <?php
                              
                        foreach($listeDesVisiteurs as $data) 
                        {
                                $prenom = $data['prenomVisiteur'];
                                $nom = $data['nomVisiteur'];
			        $idV = $data['id'];

                              
                ?> 
                <option> <?php echo $idV ?> </option>
                <?php
                        }
                ?>
                </select>
            </p>
           
              
                <br/>
                <input id="valid" type="submit" value="Valider" />
           
        
    </form>