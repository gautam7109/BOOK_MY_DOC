<?php
session_start();
  $cookie_name = "Gautam";
$cookie_value = "Gautam Singh";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
if(isset($_SESSION['name']))
{


?>

<!DOCTYPE html>
<html>
<head>
	<title>BOOK MY DOC</title>
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" type="text/css" href="main.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
<body>
    <?php
  if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
    echo "Cookie '" . $_SESSION['name'] . "' is set!<br>";
    echo "Value is: " . $_SESSION['name'];
}
?>
<?php
  function runMyFunction() {
    header("location:signin.html");
    session_destroy();
  }

  if (isset($_GET['hello'])) {
    runMyFunction();
  }
?>

<header>
<img src="s1.png" width="200" align="left" style="margin-top: -40px; border-radius: 7px 7px 7px 7px;">
<a href='main1.php?hello=true'>Logout</a>
</header>
<section >
<article>

  <ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#About Us">About Us</a></li>
  <li><a href="#Term">Term</a></li>
  <li><a href="#Contact">Contact</a></li>
</ul>
<h1 style="text-align: center; font-size: 30px; color: black; background-color:#B8860B;">BOOK AN APPOINTMENT</h1>
<div class="column" style="background-color:#BDB76B ">
<img src="pic1.png" style="border-radius: 5px 5px 5px 5px; height: 100px; width: 100px;"><br>
<form action="main.php" method="POST" >
<input type="text" name="name" value=" DR.KAIRA (MBBS)" style="border:none;"readonly><br>
<input type="radio" name="time" value=" 10:00 AM to 12:00PM">10:00 AM to 12:00PM<br>
<input type="radio" name="time" value=" 2:00 AM to 4:00PM">2:00 PM to 4:00PM<br>
<input type="radio" name="time" value=" 4:00 AM to 6:00PM">4:00 PM to 6:00PM<br>
<input type="submit" name="book" value="Book Appointment" style="border-radius: 5px 5px 5px 5px ; background-color: indigo;height:40px;">
</form>
</div>
<div class="column" style="background-color:#BDB76B ">
<img src="pic2.png" style="border-radius: 5px 5px 5px 5px; height: 100px; width: 100px;"><br>
<form action="main.php" method="POST" >
<input type="text" name="name" value=" DR.SHERIN (MBBS,MD)" style="border:none;"readonly><br>
<input type="radio" name="time" value=" 10:00 AM to 12:00PM">10:00 AM to 12:00PM<br>
<input type="radio" name="time" value=" 2:00 AM to 4:00PM">2:00 PM to 4:00PM<br>
<input type="radio" name="time" value=" 4:00 AM to 6:00PM">4:00 PM to 6:00PM<br>
<input type="submit" name="book" value="Book Appointment" style="border-radius: 5px 5px 5px 5px ; background-color: indigo;height:40px;">
</form>
</div>
<div class="column" style="background-color:#BDB76B ">
<img src="pic3.png" style="border-radius: 5px 5px 5px 5px; height: 100px; width: 100px;"><br>
<form action="main.php" method="POST" >
<input type="text" name="name" value=" DR.MAHIMA (MBBS,MS)" style="border:none;"readonly><br>
<input type="radio" name="time" value=" 10:00 AM to 12:00PM">10:00 AM to 12:00PM<br>
<input type="radio" name="time" value=" 2:00 AM to 4:00PM">2:00 PM to 4:00PM<br>
<input type="radio" name="time" value=" 4:00 AM to 6:00PM">4:00 PM to 6:00PM<br>
<input type="submit" name="book" value="Book Appointment" style="border-radius: 5px 5px 5px 5px ; background-color: indigo;height:40px;">
</form>
</div>
<div class="column" style="background-color:#BDB76B ">
<img src="pic4.png" style="border-radius: 5px 5px 5px 5px; height: 100px; width: 100px;"><br>
<form action="main.php" method="POST" >
<input type="text" name="name" value=" DR.VISHAL (MBBS,MD)" style="border:none;"readonly><br>
<input type="radio" name="time" value=" 10:00 AM to 12:00PM">10:00 AM to 12:00PM<br>
<input type="radio" name="time" value=" 2:00 AM to 4:00PM">2:00 PM to 4:00PM<br>
<input type="radio" name="time" value=" 4:00 AM to 6:00PM">4:00 PM to 6:00PM<br>
<input type="submit" name="book" value="Book Appointment" style="border-radius: 5px 5px 5px 5px ; background-color: indigo;height:40px;">
</form>
</div>
<div class="column" style="background-color:#BDB76B ">
<img src="pic5.png" style="border-radius: 5px 5px 5px 5px; height: 100px; width: 100px;"><br>
<form action="main.php" method="POST" >
<input type="text" name="name" value=" DR.VIKASH (BDS,MDS)" style="border:none;"readonly><br>
<input type="radio" name="time" value=" 10:00 AM to 12:00PM">10:00 AM to 12:00PM<br>
<input type="radio" name="time" value=" 2:00 AM to 4:00PM">2:00 PM to 4:00PM<br>
<input type="radio" name="time" value=" 4:00 AM to 6:00PM">4:00 PM to 6:00PM<br>
<input type="submit" name="book" value="Book Appointment" style="border-radius: 5px 5px 5px 5px ; background-color: indigo;height:40px;">
</form>
</div>
<div class="column" style="background-color:#BDB76B ">
<img src="pic6.png" style="border-radius: 5px 5px 5px 5px; height: 100px; width: 100px;"><br>
<form action="main.php" method="POST" >
<input type="text" name="name" value=" DR.LOHAN (MBBS)" style="border:none;"readonly><br>
<input type="radio" name="time" value=" 10:00 AM to 12:00PM">10:00 AM to 12:00PM<br>
<input type="radio" name="time" value=" 2:00 AM to 4:00PM">2:00 PM to 4:00PM<br>
<input type="radio" name="time" value=" 4:00 AM to 6:00PM">4:00 PM to 6:00PM<br>
<input type="submit" name="book" value="Book Appointment" style="border-radius: 5px 5px 5px 5px ; background-color: indigo;height:40px;">
</form>
</div>
<div class="column" style="background-color:#BDB76B ">
<img src="pic7.png" style="border-radius: 5px 5px 5px 5px; height: 100px; width: 100px;"><br>
<form action="main.php" method="POST" >
<input type="text" name="name" value=" DR.PAUL(MBBS,MS)" style="border:none;"readonly><br>
<input type="radio" name="time" value=" 10:00 AM to 12:00PM">10:00 AM to 12:00PM<br>
<input type="radio" name="time" value=" 2:00 AM to 4:00PM">2:00 PM to 4:00PM<br>
<input type="radio" name="time" value=" 4:00 AM to 6:00PM">4:00 PM to 6:00PM<br>
<input type="submit" name="book" value="Book Appointment" style="border-radius: 5px 5px 5px 5px ; background-color: indigo;height:40px;">
</form>
</div>
<div class="column" style="background-color:#BDB76B ">
<img src="pic8.png" style="border-radius: 5px 5px 5px 5px; height: 100px; width: 100px;"><br>
<form action="main.php" method="POST" >
<input type="text" name="name" value=" DR.ATUL(MBBS,MD)" style="border:none;"readonly><br>
<input type="radio" name="time" value=" 10:00 AM to 12:00PM">10:00 AM to 12:00PM<br>
<input type="radio" name="time" value=" 2:00 AM to 4:00PM">2:00 PM to 4:00PM<br>
<input type="radio" name="time" value=" 4:00 AM to 6:00PM">4:00 PM to 6:00PM<br>
<input type="submit" name="book" value="Book Appointment" style="border-radius: 5px 5px 5px 5px ; background-color: indigo;height:40px;">
</form>
</div>
<div class="column" style="background-color:#BDB76B ">
<img src="pic9.png" style="border-radius: 5px 5px 5px 5px; height: 100px; width: 100px;"><br>
<form action="main.php" method="POST" >
<input type="text" name="name" value=" DR.AVNI(MBBS,ORTO)"style="border:none;"readonly><br>
<input type="radio" name="time" value=" 10:00 AM to 12:00PM">10:00 AM to 12:00PM<br>
<input type="radio" name="time" value=" 2:00 AM to 4:00PM">2:00 PM to 4:00PM<br>
<input type="radio" name="time" value=" 4:00 AM to 6:00PM">4:00 PM to 6:00PM<br>
<input type="submit" name="book" value="Book Appointment" style="border-radius: 5px 5px 5px 5px ; background-color: indigo;height:40px;">
</form>
</div>
<div class="column" style="background-color:#BDB76B ">
<img src="pic10.png" style="border-radius: 5px 5px 5px 5px; height: 100px; width: 100px;"><br>
<form action="main.php" method="POST" >
<input type="text" name="name" value=" DR.PATIL(MBBS,MD)" style="border:none;"readonly><br>
<input type="radio" name="time" value=" 10:00 AM to 12:00PM">10:00 AM to 12:00PM<br>
<input type="radio" name="time" value=" 2:00 AM to 4:00PM">2:00 PM to 4:00PM<br>
<input type="radio" name="time" value=" 4:00 AM to 6:00PM">4:00 PM to 6:00PM<br>
<input type="submit" name="book" value="Book Appointment" style="border-radius: 5px 5px 5px 5px ; background-color: indigo;height:40px;">
</form>
</div>
<div class="column" style="background-color:#BDB76B ">
<img src="pic11.png" style="border-radius: 5px 5px 5px 5px; height: 100px; width: 100px;"><br>
<form action="main.php" method="POST" >
<input type="text" name="name" value=" DR.ANU(MBBS,MD)" style="border:none;"readonly><br>
<input type="radio" name="time" value=" 10:00 AM to 12:00PM">10:00 AM to 12:00PM<br>
<input type="radio" name="time" value=" 2:00 AM to 4:00PM">2:00 PM to 4:00PM<br>
<input type="radio" name="time" value=" 4:00 AM to 6:00PM">4:00 PM to 6:00PM<br>
<input type="submit" name="book" value="Book Appointment" style="border-radius: 5px 5px 5px 5px ; background-color: indigo;height:40px;">
</form>
</div>
<div class="column" style="background-color:#BDB76B ">
<img src="pic12.png" style="border-radius: 5px 5px 5px 5px; height: 100px; width: 100px;"><br>
<form action="main.php" method="POST" >
<input type="text" name="name" value=" DR.MADHU(BDS,MDS)" style="border:none;"readonly><br>
<input type="radio" name="time" value=" 10:00 AM to 12:00PM">10:00 AM to 12:00PM<br>
<input type="radio" name="time" value=" 2:00 AM to 4:00PM">2:00 PM to 4:00PM<br>
<input type="radio" name="time" value=" 4:00 AM to 6:00PM">4:00 PM to 6:00PM<br>
<input type="submit" name="book" value="Book Appointment" style="border-radius: 5px 5px 5px 5px ; background-color: indigo;height:40px;">
</form>
</div>
</article>
</section>
	</body>
</html>

<?php

}

else
{
   header("location:signin.html");
}

?>
