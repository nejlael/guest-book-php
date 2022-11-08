<?php

require "connexion.php";


    $sql = 'SELECT * FROM petit_mots ORDER BY id DESC';
    
    # Exécution du query
    # Parcours de l'ensemble des résultats et construction d'un tableau d'objet(s) de la classe Category
    foreach ($connexion->query($sql) as $row) {
        echo $row['nom'] . "\t";
        echo $row['prenom'] . "\t";
        echo $row['petit_mot'] . "\n";
        ?>

        <form action="delete.php" method="POST" >
        <button type="submit" name ="id" value="<?php echo $row['id']?>">
        supprimer</button>
        </form>

        <?php
        echo "
        
        
        <br>";
        }

        ?>