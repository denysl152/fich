<?php   
$destinataire = "";
$sujet = "Booking - Customer : ".$Name." ".$FirstName;
$message = "My Booking :\n\n
Name : $Name\n
First Name : $FirstName\n
Country : $Country\n    
Tel : $Phone\n
Email : $myEmail\n  
Comment : \n $Comment";
$headers = "From: web@example.com" . "\r\n" .
"Reply-To: web@example.com" . "\r\n" .
"X-Mailer: PHP/" . phpversion();

if(mail($destinataire, $sujet, $message, $headers)){
   //echo $Name;
    //echo $destinataire;
    print("Ok");
    mail($destinataire, $sujet, $message, $headers);
}
else{
    print("NO");
}

    ?>
   