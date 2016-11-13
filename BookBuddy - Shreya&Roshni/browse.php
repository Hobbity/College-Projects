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
 

    <link href="messages.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="demo.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="demo.js"></script>
		<!--
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
    <!- Bootstrap Core CSS - ->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!- Custom CSS  - ->
    <link href="css/2-col-portfolio.css" rel="stylesheet">
-->


<style type="text/css">
	body{
		background: url(header.jpg);
	}
</style>

    <link href="messages.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <div class="navbar-brand" href="" >BookBuddy</div>
    </div>
    <ul class="nav navbar-nav">
      <!--<li ><a href="index.php">Home</a></li>-->
      <li class="active"><a href="browse.php">Browse</a></li>
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


<form action="browser.php" method="POST" style="margin-top:10%;">
          <div class="field-wrap">
          <input type="text"required autocomplete="off"/ placeholder="Search query" name="search" style="width:50%;margin-left:25%;" >
          </div>
          <button class="button button-block" style="background-color:black;width:50%;margin-left:25%;"/>Search</button>
</form>
<br/>
<br/>


<div style="margin-left:3%;color:black;">

<!--
	<div class="row">
		<div class="col-sm-6">
			<h2>Book Name</h2>
		</div>
		<div class="col-sm-6">
			<h2>Owner ID</h2>
		</div>
	</div>
-->
<!--
<table align="center" border="1px" width="90%" style="background-color:#404040;color:white;margin-left:5%;">
  <tr>
    <th style="text-align:center">Book</th>
    <th style="text-align:center">Owner</th>
  </tr>

<?php
/*
mysql_connect("localhost", "root", "");
mysql_select_db("first_db") or die("Cannot connect to database");

  $query = null;
  $search = null;
$search = mysql_real_escape_string($_POST['search']);

$query = mysql_query("SELECT username,details FROM list WHERE details LIKE '%$search%'");


while($row = mysql_fetch_array($query))
{
  /*
	Print "<div class='row'>";
		Print '<div class="col-sm-6"><h3>'.$row['details']."</h2></div>";

		Print '<div class="col-sm-6"><h4>'.$row['username']."</h4></div>";

	Print "</div>";
*/
  /*
    Print "<tr>";
    Print '<td align="center">'.$row['details']."</td>";
    Print '<td align="center">'.$row['username']."</td>";
  //  Print '<td align="center">'.$row['time']."</td>";
  //  Print '<td align="center">'.$row['message']."</td>";
    Print "</tr>";
  }
*/
?>
</table>
-->
</div>
</body>

</html>