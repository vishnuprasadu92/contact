<?php

echo "Welcome to Our Contact Page";
echo "<br>";
session_start();
$firstname=$_GET['fname'];
$lastname=$_GET['lname'];
$mail=$_GET['Email'];
echo" Your First name is ".$firstname.".";echo "<br>";
echo" Your Last name is ".$lastname.".";echo"<br>";
echo" Your E-mail Address ".$mail.	".";echo"<br>";

?>