<?php

require "config.php";
require "fonction.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nom =  $_POST["nom"] . "<br/>";
        $prenom =  $_POST["prenom"] . "<br/>";
        $email = $_POST["mail"]  . "<br/>";
        $password = $_POST["password"]  . "<br/>";
        $confirm_password = $_POST["confirm_password"] . "<br/>";
        

send_data($prenom , $mail , $motdepasse , $nom);


        
/*$pseudo = htmlspecialchars($_POST['pseudo']);
$mail = htmlspecialchars($_POST['mail']);
$mail2 = htmlspecialchars($_POST['mail2']);
$mdp = sha1($_POST['mdp']);
$mdp2 = sha1($_POST['mdp2']);

$pseudolength = strlen($pseudo);
if($pseudolength<= 255){

    
    if($mail == $mail2){
      if($mdp == $mdp2){

      }
      else {
          $erreur = "Vos mots de passe correspondents pas";
      }
    } 
    else{
        $erreur = "Vos addresses email ne correspondent pas!";
    }
} else {
    $erreur = "Votre pseudo ne doit pas dépasser 255 caractères";
}
    } else{
        $erreur = "Tous les champs doivent être complétés";
    }
}*/
?>
<body>
   <div align="center">
   <h2>Incription</h2>
   <br><br>
   <form action="" method="POST">
   <table>
   <tr>
   <td align="right">
   <label for="pseudo">Nom</label>
   </td>
   <td>
   <input type="text" placeholder="Votre pseudo" id="pseudo" name="nom" required/>
   </td>
   </tr>
   <td align="right">
   <label for="">Prenom</label>
   </td>
   <td>
   <input type="text" placeholder="Votre pseudo" id="pseudo" name="prenom" required/>
   </td>
   <tr>
   <td align="right">
   <label for="email">Email</label>
   </td>
   <td>
   <input type="email" placeholder="Votre mail" id="mail" name="mail required"/>
   </td>
    </tr>
    <tr>
   <td align="right">
   <label for="mdp">Mot de passe</label>
   </td>
   <td>
   <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" required/>
   </td>
   </tr>
   <tr>
   <td align="right">
   <label for="confirm_password">Confirmation de votre mot de passe</label>
   </td>
   <td>
   <input type="confirm_password" placeholder="Veuillez confirmer votre mot de passe" id="mdp2" name="mdp2 required"/>
   </td>
    </tr>
    <tr>
    <td></td>
    <td align="center">

    <br/>
    </td>
    </tr>
   </table> 
   </form>
   </div> 
</body>