<?php

	session_start();

	if($_SESSION['user'])
	{	
	}
	else
	{
		header("location:index.php");
	}
	$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
		<title>BookBuddy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
<link rel="stylesheet" type="text/css" href="demo.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="demo.js"></script>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="css/2-col-portfolio.css" rel="stylesheet">

	</head>


<style type="text/css">
	body{
		background: url(header.jpg);
	}
</style>


<body>



<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <div class="navbar-brand" href="index.php" >BookBuddy</div>
    </div>
    <ul class="nav navbar-nav">
      <!--<li class="active"><a href="index.php">Home</a></li>-->
      <li><a href="browse.php">Browse</a></li>
      <li><a href="home.php">Your Bookshelf</a></li>
      <li><a href="messages.php">Messages</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
    	<li style="margin-top:10px;margin-right:10px;color:white;"><?php Print $_SESSION['user']?></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
      <!--
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
  -->
    </ul>
  </div>
</nav>


<h1>Compose Message</h1>
<br/>
<form action="ping.php" method="POST">

          <div class="field-wrap">
          <input type="text"required autocomplete="off"/ placeholder="receiver@xyz.com" name="receiver" style="color:white;">
          </div>
          
          <div class="field-wrap">
          <input type="text"required autocomplete="off"/ placeholder="Date" name="date" style="color:white;">
          </div>

          <div class="field-wrap">
          <input type="text"required autocomplete="off"/ placeholder="Time" name="time" style="color:white;">
          </div>

          <div class="field-wrap">
          <input type="text"required autocomplete="off"/ placeholder="Venue" name="venue" style="color:white;">
          </div>

          <button class="button button-block" style="background-color:black"/>Send</button>
</form>

<?php
mysql_connect("localhost", "root", "");
mysql_select_db("first_db") or die("Cannot connect to database");

	$date = mysql_real_escape_string($_POST['date']);
	$time = mysql_real_escape_string($_POST['time']);
	$receiver = mysql_real_escape_string($_POST['receiver']);
	$sender = $_SESSION['user'];
    $timestamp = date('Y-m-d H:i:s');
    $message = "PING";
    $subject = "Notification!";	
    $actual_message = "Your book buddy has sent you a reminder about your meeting!";
    $headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

mail($receiver, $subject, $actual_message, $headers);


?>

</body>


</html>