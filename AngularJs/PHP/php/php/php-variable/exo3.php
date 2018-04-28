<?php
  define('LOGIN','Denys');  // Login correct
  define('PASSWORD','Louves');  // Mot de passe correct
  $message = '';      // Message à afficher à l'utilisateur
 
  // Si le tableau $_POST existe alors le formulaire a été envoyé
  if(!empty($_POST))
  {
    if(empty($_POST['login']))
    {
      $message = 'Veuillez indiquer votre login svp !';
    }
      elseif(empty($_POST['motDePasse']))
    {
      $message = 'Veuillez indiquer votre mot de passe svp !';
    }
      elseif($_POST['login'] !== LOGIN)
    {
      $message = 'Votre login est faux !';
    }
      // Le mot de passe est-il correct ?
      elseif($_POST['motDePasse'] !== PASSWORD)
    {
      $message = 'Votre mot de passe est faux !';
    }
      else
    {
      // L'identification a réussi
      $message = 'Bienvenue '. LOGIN .' !';
    }
  }


  $timestamp = time() + 365*24*3600; // Le cookie a une durée de vie de 1an
setcookie('LOGIN','Denys', $timestamp); // On écrit un cookie
setcookie('PASSWORD','Louves', $timestamp); // On en écrit un autre cookie...
// Vous remarquez que tout est bien noté avant le début du code HTML
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Formulaire</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php if(!empty($message)) : ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
        <h4>Identifiant</h4>
        <p>
          <label for="login">Login :</label>
          <input type="text" name="login" id="login" value="<?php if(!empty($_POST['login'])) { echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>" />
        </p>
          <div>
            <label for="password">Mot de passe :</label> 
            <input type="password" name="motDePasse" id="password" value="" /> 
            <input type="submit" name="submit" value="Identification" />
          </div>
          </p>
    </form>
  </body>
</html>