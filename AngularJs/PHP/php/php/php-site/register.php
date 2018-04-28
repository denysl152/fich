<?php require 'inc/header.php'; ?>

<?php

if(!empty($_POST)){
    $errors = array();
    if(empty(_POST["username"]) || !preg_match("/^[a-z0-9_]+$/", $_POST["username"])){
        $errors['username'] = "Votre pseudo n'est pas valide (alphanumérique)";

    } else{
        $req = $pdo->prepare('SELECT id from myusers WHERE username= ?');
        $req = 
    }

if(!empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Votre email n'est pas valide";
}

if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
    $errors['password'] = "Vous devez rentrer un mot de passe valide";
}

    debug($errors);
    require_once 'db.php';
   $req = $pdo -> prepare("INSERT INTO myusers SET username= ? , password= ? , email= ? ");
   $password = password_hash($_POST['password'] , PASSWORD_BCRYPT);
   $req->execute([$_POST['username'] ,$_POST['email']]);
   die('Votre compte a bien été créé');
   
}
?>
<h1>S'inscrire</h1>

<form action="" method="POST">

<div class="form-group">
<label for="">Pseudo</label>
<input type="text" name="username" class="form-control" />
</div>

<div class="form-group">
<label for="">Email</label>
<input type="email" name="email" class="form-control" />
</div>

<div class="form-group">
<label for="">Mot de passe</label>
<input type="password" name="password" class="form-control" />
</div>

<div class="form-group">
<label for="">Confirmez de Mot de Passe</label>
<input type="password" name="password_confirm" class="form-control"/>
</div>

<button type="submit" class="btn btn-primary">M'inscrire</button>

</form>


<?php require 'inc/footer.php'; ?>

