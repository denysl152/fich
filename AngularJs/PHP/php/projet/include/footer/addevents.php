<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300|Itim" rel="stylesheet">
  <link rel="stylesheet" type='text/css' href="style.css">

</head>
<body>
<table>

<form action="">
<h2>Ajouter un évenement</h2>

<tr><td><p>Nom de l'évenement</p></td><td><p>Date</p></td></tr>

 <tr><td><input type="text"></td><td><input type="date"></td></tr>
 
 <tr><td><p>Heure de debut</p></td><td><p>Heure de fin</p></td></tr>

 <tr><td><input type="time"></td><td><input type="time"></td></tr>
 
 <tr><td><p>Image de l'événement</p></td><td><p>Prix du billet</p></td></tr>

 <tr><td><input type="file"></td><td><input type="text"></td></tr>

<tr><td><p>Description</p></td></tr>

 <tr><td><textarea cols="30" rows="10"></textarea></td></tr>

 <tr><td><button type="submit" >Valider</button></td></tr>
 
</form>
</table>
<a href="sendmail.php">Base de données</a>
<?php
require('../footer.php')
?>    
</body>
</html>