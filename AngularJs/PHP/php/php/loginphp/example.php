<?php


?>
<!DOCTYPE html>
<html lang="fr">
 <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
<body>
<div id="frm">
<h2>Authentication</h2>

<form action="create.php" method="POST">   
<label>Email/Identifiant</label>
<input name="user" id="user" type="text"><br/>
<label>Mot de passe :</label>
<input name="password" id="pass" type="pass">
<p>
<button type="submit" id="btn" value="Login">Connexion</button>
</p>
</form>

  </div>
   </body>
   </html>