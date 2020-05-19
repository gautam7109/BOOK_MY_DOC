<?php
  include 'tolet_connect.php';
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['contact'];
$gender=$_POST['gender'];
$pass=$_POST['pass'];

$sq1="INSERT into user(fname,lname,email,mobile,gender,pass)values('$fname','$lname','$email','$mobile','$gender','$pass');";
if(mysqli_query($con,$sq1))
{

	echo "success";
}
else
{
	echo "failed";
}

?>















?>