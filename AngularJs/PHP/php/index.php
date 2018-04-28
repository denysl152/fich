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


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
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
   <label for="confirm_email">Confirmation de votre Email</label>
   </td>
   <td>
   <input type="confirm_email" placeholder="Veuillez confirmer votre mail" id="mail2" name="mail" required2/>
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
    <td align="center">

    <br/>
    </td>
    </tr>
   </table> 
   </form>
   </div> 
</body>