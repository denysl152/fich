<h1>Bienvenue 
<?php 
echo $_SESSION['username'];
 ?> </h1>
<?php 
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=Vybz_php;charset=utf8', 'root', 'acer45');
}
catch(Exception $e)
{
	
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM `Vybz`');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
	//var_dump($donnees);

?>
<p>Je m'appelle <?php echo $donnees['name']?><p><?php echo $données['hourbegin'] ?></p>
<?php 
}

$reponse->closeCursor();
?>