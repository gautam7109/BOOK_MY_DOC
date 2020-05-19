<?php
session_start();
$msg='';
$id2='';
if(isset($_POST['login']) && isset($_POST['email']) && isset($_POST['pass']))
{
include'tolet_connect.php';





  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
    $id1 = $_POST['email'];
    $pass1=$_POST['pass'];


$sql="select email,pass from user where email='$id1' and pass='$pass1';";

$result = mysqli_query($con, $sql);

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	$id2=$row['email'];
	$pass2=$row['pass'];
   
}
if ($id1==$id2 && $pass1==$pass2 ) 
	{
		 $_SESSION["name"] = $id1;
	
			header("location:main1.php");

	}
	else
	{
		$msg='Invalid Username or Password';
		
		
	}




  }
  else{
	  echo"fill user name";
	  
  }
  
  
	
	
}


?>