   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="../style.css">
    <title>Document</title>
<body>
<div class="PageAdmin">
<h3>Authentication</h3>
<table>
<form action="" method="POST">
<tr><td><h4>Email/Identifiant</h4></td><td><h4>Mot de passe :</h4></td></tr>
<tr><td><input name="username" type="text"></td><td><input name="password" type="Password"></td></tr>
<tr><td><button type="submit" name="submit">Connexion</button></td></tr>
</form>
</table>
<?php  

session_start();

$user='denysl';
$password_definited='Monde';

 if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username&&$password){
        if($username==$user&&$password==$password_definited){
            $_SESSION['username']=$username;
            header('Location : admin.php');
        }else{

            echo 'Identifiants eronnes';
        }
    }else{
        echo 'Veillez remplir tous les champs!';
    }
}
?>
  </div>
   </body>
   </html>
 