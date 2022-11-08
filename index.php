<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "connexion.php";
    ?>
 <h1>Livre d'or de Nejla</h1>

<form action="insert.php" method="post">
    <label for="nom">ton nom</label>
    <input type="text" name="nom">
    <br>
    <label for="prenom">ton prenom</label>
    <input type="text" name="prenom">
    <br>
    <label for="petitmot">Ecris moi quelque chose ...</label><br>
    <textarea name="petitmot" cols="30" rows="10"></textarea>
    <input type="submit" value="Envoyer !">
</form>

<?php 
include "select.php";
?>

</body>
</html>

