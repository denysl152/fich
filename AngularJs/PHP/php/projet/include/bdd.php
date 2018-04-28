<?php 

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Vybz_php;charset=utf8', 'root', 'acer45');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On ajoute une entrée dans la table jeux_video
$bdd->exec('INSERT INTO Vybz(`name`, `date`, `hourbegin`,`hourend`, `img`, `price`, `description`, `id`) VALUES(['Concert Miami'] , ['20/10/2019'] , ['20:00:00'],['00:00:00:00'],['2'],['20$'],[''], NULL');

echo 'Le jeu a bien été ajouté !';

var_dump($bdd);
?>
