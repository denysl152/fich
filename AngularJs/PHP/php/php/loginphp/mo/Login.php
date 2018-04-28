<?php  

session_start();

$user='denysl';
$password ='Monde';


if (isset($_SESSION['logedin']) && $_SESSION['loggedin'] == true){
    header("Location: loginout.php");
}
if (isset($_SESSION['username']) && isset($_POST['password'])){
    ($_POST['username'] == $user && $_POST['password'] == $password);
    {
            $_SESSION['loggedin'] = true;
            header("Location: loginout.php");
        }
}
?>
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
<div class="PageAdmin">
<h2>Authentication</h2>

<form action="" method="POST">   
<p>Email/Identifiant</p>
<input name="username" type="text"><br/>
<p>Mot de passe :</p>
<input name="password" type="Password">
<button type="submit" value="Login!" name="submit">Connexion</button></td></tr>
</form>

  </div>
   </body>
   </html>