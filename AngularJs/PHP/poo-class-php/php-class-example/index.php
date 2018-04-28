<?php


require "personnage.php";

$Sangoku = new Personnage('Sangoku');
$Sangoku->power_up();
$Sangoku->atk = 40;
var_dump($Sangoku);

$Freezer = new Personnage('Freezer');
$Freezer->atk = 10;
$Sangoku->attack($Freezer);
var_dump($Freezer);

?>