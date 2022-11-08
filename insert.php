
<?php
try {
require "connexion.php";

$sql = "INSERT INTO `petit_mots` ( `nom`, `prenom`, `petit_mot`)
VALUES( '$_POST[nom]','$_POST[prenom]','$_POST[petitmot]')
";
$connexion -> exec($sql);
echo "Merci beaucoup ! <br> <a href='index.php'>Retour au Livre D'or</a>";
} catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}
?>
