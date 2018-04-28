<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Exo 1</title>
</head>
<body>
    <h4>User agent</h4>
    <?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$browser = get_browser(null, true);
print_r($browser);?>
<br>
<h4>ADRESSE IP</h4>
<?php  
echo $_SERVER["REMOTE_ADDR"];
?>
<br>
<h4>Nom du serveur</h4>
<br>
<?php
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

echo $hostname;
?>
</body>
</html>