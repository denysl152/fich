<?php
require_once 'incl/function.php';
reconnect_from_cookie();
if(isset($_SESSION['auth'])){
    header('Location: account.php');
    exit();
}
if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){
    require_once 'incl/data.php';
    $req = $pdo->prepare('SELECT * FROM users WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL');
    $req->execute(['username' => $_POST['username']]);
    $user = $req->fetch();
    if(password_verify($_POST['password'], $user->password)){
        $_SESSION['auth'] = $user;
$_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
if($_POST['remember']){
    $remember_token = str_random(250);
    $pdo->prepare('UPDATE users SET remember_token = ? WHERE id = ?')->execute([$remember_token, $user->id]);
    setcookie('remember', $user->id . '==' . $remember_token . sha1($user->id . 'ratonlaveurs'), time() + 60 * 60 * 24 * 7);
}
        header('Location: account.php');
        exit();
    }else{
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1>Se connecter</h1>

<form action="" method="POST">

    <div class="form-group">
        <label>Pseudo ou email</label>
        <input type="text" name="username" class="form-control"/>
    </div>

    <div class="form-group">
        <label>Mot de passe</label>
        <input type="password" name="password" class="form-control"/>
    </div>

    <div class="form-group">
        <label>
            <input type="checkbox" name="remember" value="1"/> Se souvenir de moi
        </label>
    </div>

    <button type="submit" class="btn btn-primary">Se connecter</button>

</form>
<p><a href="../container.php">Retour sur la page d'accueil</a></p> 

</body>
</html>