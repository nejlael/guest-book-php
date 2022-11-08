<?php

try {
    require "connexion.php";

    $get = $_POST['id'];
    
    $sql = "DELETE FROM petit_mots WHERE id=$get";
    $connexion -> exec($sql);
    header('Location: index.php');
    } catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }

?>