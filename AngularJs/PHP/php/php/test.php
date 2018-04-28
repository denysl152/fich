<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My test</title>
</head>
<body>
<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=Test-Base;charset=utf8', 'root', 'acer45');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM user');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
   // var_dump($donnees);
?>
<p>Les Noms</p>

 <p>Je m'appelle <?php echo $donnees['name']?><?php echo $données['firstname']?>
</p>
<?php
}

$reponse->closeCursor();
?>
</body>
</html>