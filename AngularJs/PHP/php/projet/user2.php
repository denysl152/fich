<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP est la</title>
</head>
<body>
<?php

if(isset($_POST) && isset($_POST['Name']) && isset($_POST['FirstName']) && isset($_POST['Country']) && isset($_POST['Phone'])  && isset($_POST['myEmail']) && isset($_POST['Comment']) )
{        
    extract($_POST);
    if(!empty($Name) && !empty($FirstName) && !empty($Country) && !empty($Phone)  && !empty($myEmail) && !empty($Comment) )
    { 
       /* echo $Name;
        echo $FirstName;*/
        require("mail.php");
       


    } // fin if Empty

    else { echo "Param Vide !";}
} 
else { echo "Param Indefini !";

}
?>
</body>
</html>
