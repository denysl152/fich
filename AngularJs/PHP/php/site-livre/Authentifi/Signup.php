<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <h1>Inscription</h1>  
  <br>
<form action="" method="POST">

<div class="form-group">
    <label>Pseudo</label>
    <input type="text" name="username" class="form-control"/>
</div>

<div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control"/>
</div>

<div class="form-group">
    <label>Mot de passe</label>
    <input type="password" name="password" class="form-control"/>
</div>

<div class="form-group">
    <label>Confirmez votre mot de passe</label>
    <input type="password" name="password_confirm" class="form-control"/>
</div>

<button type="submit" class="btn btn-primary">M'inscrire</button>

</form>
</body>
</html>