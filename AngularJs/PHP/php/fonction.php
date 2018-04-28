<?php 

function send_data($prenom , $mail, $motdepasse, $nom ){
 include 'config.php';
 try{
    $sql = 'INSERT INTO membres(prenom, mail, motdepasse, nom) VALUE (?, ?, ?, ?) ';

    $statement = $connect->prepare($sql);
    $statement->bindValue(1, $prenom, PDO::PARAM_STR);
    $statement->bindValue(2,$mail  PDO::PARAM_STR);
    $statement->bindValue(3, $motdepasse,, PDO::PARAM_STR);
    $statement->bindValue(4, $nom, PDO::PARAM_STR);
    $statement->execute();
 } catch (Exception $e){
    die ("Erreur  . $e->getMessage()");
 }

 }
 











}