<?php 

require "perso.php";
?>

<h3 align="center">Dialogue</h3>


<?php
echo "Gentil : Qu'est-ce que tu viens faire la, méchant de pacotille ?
Citoyens n'ayez pas peur car la cavalerie est la!" . "<br/>";
echo "Je suis l'homme à l'épée Yakari o sabres !!!!" . "<br/>";
echo "" . "<br/>";
echo "Méchant : Je suis l'homme qui terrasse le monde rien qu'en ma présence, je suis la créature la plus forte aux monde :  Jack le demon." . "<br/>";
echo " donc ferme ta gueule";
?>

<h4 align="center">Begin</h4>
<?php
echo "Statisques". "<br/>";
$Jack = new Personnage('Jack');
$Yakari = new Personnage('Yakari');


echo "Yakari : ";
  print_r ($Yakari); 
echo "---------Versus--------- ";
echo " Jack : ";
print_r($Jack);



?>
<h2 align="center">Fight</h2>


<?php
$Jack = new Personnage('Jack');
$Yakari = new Personnage('Yakari');
//$Jack->Regen();
$Jack->regen();
$Jack->Attk = 58;
$Jack->stroke_pioche($Yakari);
$Yakari->vie = 192;
var_dump($Jack). "<br/>";
var_dump($Yakari);


?>

<p> Jack : Qu'est-ce qui t'arrive héros de pacotille ??</p>    
<p>Yakari : Bwahh</p>
 <br/>
<br>
<?php

$Jack->Attk = 100;
$Jack->stroke_pioche($Yakari);
$Yakari->vie = 124;
var_dump($Jack). "<br/>";
var_dump($Yakari);
?>
<p>Jack : Il est temps d'en finir</p>
<p>Yakari : Va te faire foutre</p>

<?php
//2EME Perso


$Yakari->Attk = 90;
$Yakari->bang_ns($Jack);
$Jack->vie = 160;
var_dump($Yakari). "<br/>";
?>
<p>Yakari : Qui a t'il tu perd l'équilibre ??</p>
<p>Jack : AAH</p>

<p>Yakari : Je vais en finir avec toi</p>
<?php

$Yakari->Attk = 20;
$Jack->vie = 140;
$Yakari->bang_ns($Jack);
var_dump($Yakari). "<br/>";

echo "Jack : C'est sa ton coup de poing , tiens goute sa " ;
echo "Texas Smash" . "<br/>";
/*
$Jack->Attk = 88;
$Yakari->
$Jack->stroke_pioche($Yakari);
var_dump($Jack). "<br/>";
var_dump($Yakari);

echo "Jack : Tu t'es bien battu petit mais j'étais trop fort pour toi" . "<br/>";
echo "Yakari : Attends " . "<br/>";
echo "Jack : Nani ???". "<br/>";

$Yakari->Attk = 140;
$Yakari->regen();
$Jack->vie = 0;
$Yakari->bang_ns($Jack);
var_dump($Yakari). "<br/>";
*/


?>
<br>
<h3>Fin du Game</h3>