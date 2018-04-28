<?php


try
{
	$bdd = new PDO('mysql:host=localhost;dbname=tuto;charset=utf8', 'root', 'acer45');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On ajoute une entrée dans la table jeux_video
$bdd->exec('SELECT * FROM myusers');
var_dump($bdd);

?>