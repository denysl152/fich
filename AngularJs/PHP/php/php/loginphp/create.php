<?php

$username = $_POST['user'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysql_connect("localhost","root","acer45");
mysql_select_db("login");

$result = mysql_query("Select * from users where username = '$username' and password = '$password'")
                        or die("Failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if ($row['username'] == $username && row['password'] == $password){
    echo "Login sucess !! Welcome ".$row['username'];
} else {
 echo "Failed to login";
}
?>