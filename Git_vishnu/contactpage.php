<html>
<head>
<h2 align="center">Contact Us</h2>		

</head>
<body>
<form method="get" action="Details.php">
<table align="center" boarder="0">
<tr>
<td>First Name</td>
<td>
<input type="text" name="fname" required="">
</td>
</tr>
<tr>
<td>Last Name</td>
<td>
<input type="text" name="lname" required=""> 
</td>

</tr>
<tr>
<td>E-mail Address</td>
<td>
<input type="text" name="Email" required="">
</td>
</tr>
<tr>
<td>Message</td>
<td><textarea rows="4" cols="50">Please type your message...
</textarea>
</td>

</tr>
<tr>
<td></td>
<td><input type="Submit" value="submit"></td>
</tr>
</table>
</form>
<?php
//if(isset($_POST['submit']))
//{
//		$firstname=$_POST['fname'];
//		$lastname=$$_POST['lname'];

//		echo "Welcome to Our Contact Page";

//}

//?>
<?php
session_start();
$_SESSION['fname']=$firstname;
$_SESSION['lname']=$lastname;
$_SESSION['Email']=$mail;

?>




</body>
</html>
