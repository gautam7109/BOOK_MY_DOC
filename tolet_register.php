<?php
  include 'tolet_connect.php';
$fname1 =$_POST['fname'];
$lname1 =$_POST['lname'];
$email1=$_POST['email'];
$mobile1=$_POST['contact'];
$gender1=$_POST['gender'];
$pass1=$_POST['pass'];
echo $fname1.$lname1.$email1.$mobile1.$gender1.$pass1;
$sql="INSERT into user(fname,lname,email,mobile,gender,pass)values('$fname1','$lname1',$email1','$mobile1','$gender1','$pass1')";
  if(mysqli_query($con,$sql))
 {
echo ("RegistrationSuccess");
  }

  else
  {
      echo 'Registrationfailure';
    
  } 
  mysqli_close($con);

?>
