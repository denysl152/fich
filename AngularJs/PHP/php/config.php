<?php

try{
 $bdd= new PDO('mysql:host=localhost;dbname=espaces_membres', 'root' , '');
echo "Je suis connectée";
} catch(PDOException $e) {
    $e->getMessage();

}
