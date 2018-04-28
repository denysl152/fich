<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){
 header("Location: Login.php");
}  
?> 
<h1>JE SUIS LA</h1>

<p>Veuillez retourné sur la page <a href="Accueil.php">d'accueil !!!</a></p>