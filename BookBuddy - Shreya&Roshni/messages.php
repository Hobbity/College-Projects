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
	$name = mysql_query("SELECT name FROM users WHERE username='$user'");
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
    <link href="messages.css" rel="stylesheet">

<!--
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
-->

<!--JQUERY FOR SLIDING FRAME-->
<script type="text/javascript">
$(function() {
  $('.jqueryOptions').hide();

  $('#choose').change(function() {
    $('.jqueryOptions').slideUp();
    $('.jqueryOptions').removeClass('current-opt');
    $("." + $(this).val()).slideDown();
    $("." + $(this).val()).addClass('current-opt');
  });
});
</script>


<style type="text/css">
	body{
		background: url(header.jpg);
	}
</style>


</head>


<body>

<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" >BookBuddy</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="browse.php">Browse</a></li>
      <li><a href="home.php">Your Bookshelf</a></li>
      <li class="active"><a href="messages.php">Messages</a></li>
      
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

<h2>Messages</h2>

<form action="sendmsg.php" method="POST">
          <button class="button button-block" style="background-color:black;width:80%;margin-left:10%;"/>Compose message</button>
</form>
<br/>

<!--
<form action="ping.php" method="POST">
          <button class="button button-block" style="background-color:black;width:80%;margin-left:10%;"/>Ping on mail</button>
</form>
-->

<br/>
<br/>

<div class="select-area" align="center">
  <select name="choose" id="choose" class="input-select" style="color:white;background-color:#404040;">
    <option value="nul" selected>Messages</option>
    <option value="opt1" >Received</option>
    <option value="opt2">Sent</option>
  </select>
</div>

		<form align="center" action="delete_mail.php" method="POST" style="color:white;">
			<h3 style="color:black;">Delete </h3><input type="text" name="to_delete" placeholder="Enter ID of message" style="margin-left:25%;height:25px;background-color:#404040;width:50%;"/>
			<input type="submit" align="center" value="Delete" style="margin-left:25%;height:30px;color:white;background-color:black;width:50%;text-align:center"/>
		</form>

<section class="jqueryOptions opt1" style="color:black;">
  <div class="content">
    <h2 style="color:black;text-align:center;">Received</h2>

<table align="center" border="1px" width="90%" style="background-color:#404040;color:white;">

	<tr>
		<th style="text-align:center">Message ID</th>
		<th style="text-align:center">Sender</th>
	<!--	<th style="text-align:center">Timestamp</th>-->
		<th style="text-align:center">Message</th>
	</tr>
<?php

	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("first_db") or die("Cannot connect to database");
	$query = mysql_query("SELECT * FROM msg_transfer WHERE receiver='$user'");

	while($row = mysql_fetch_array($query))
	{
		Print "<tr>";
		Print '<td align="center">'.$row['msg_id']."</td>";
		Print '<td align="center">'.$row['sender']."</td>";
	//	Print '<td align="center">'.$row['time']."</td>";
		Print '<td align="center">'.$row['message']."</td>";
		Print "</tr>";
	}
?>
</table>

  </div>
</section>




<section class="jqueryOptions opt2">
  <div class="content">
    <h2 style="color:black;text-align:center;">Sent</h2>


<table align="center" border="1px" width="90%" style="background-color:#404040;color:white;">

	<tr>
		<th style="text-align:center">Message ID</th>
		<th style="text-align:center">Receiver</th>
	<!--	<th style="text-align:center">Timestamp</th>-->
		<th style="text-align:center">Message</th>
	</tr>
<?php

	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("first_db") or die("Cannot connect to database");
	$query = mysql_query("SELECT * FROM msg_transfer WHERE sender='$user'");

	while($row = mysql_fetch_array($query))
	{
		Print "<tr>";
		Print '<td align="center">'.$row['msg_id']."</td>";
		Print '<td align="center">'.$row['receiver']."</td>";
	//	Print '<td align="center">'.$row['time']."</td>";
		Print '<td align="center">'.$row['message']."</td>";
		Print "</tr>";
	}
?>
</table>

  </div>
</section>

<!--
<table border="1px" width="90%">

	<tr>
		<th>Sender</th>
		<th>Timestamp</th>
		<th>Message</th>
	</tr>
<?php
/*
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("first_db") or die("Cannot connect to database");
	$query = mysql_query("SELECT * FROM msg_transfer WHERE receiver='$user'");

	while($row = mysql_fetch_array($query))
	{
		Print "<tr>";

		Print '<td align="center">'.$row['sender']."</td>";

		Print '<td align="center">'.$row['time']."</td>";
		Print '<td align="center">'.$row['message']."</td>";
//		Print '<td align="center"><form action="compose.php" method="POST"><button name="reply" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ui-icon-check ui-btn-icon-left">Reply</button></form></td>';
//IMPORTANT*****
		/*
if(isset($_GET['reply'])){
	$reply_sender = $_SESSION['user'];
	$reply_receiver = $row['sender'];

}
*/
	//	Print "</tr>";
	//}
?>

<!- -
<div data-role="popup" id="popup" class="ui-content" style="min-width:400px;">
      <form method="post" action="sendmsg.php">
        <div>
          <h3>Reply</h3>
            <input type="text"required autocomplete="off"/ placeholder="Subject" name="subject" >
            <input type="text"required autocomplete="off"/ placeholder="Message" name="message" style="height:200px;" >

          <button class="button button-block" style="background-color:black"/>Send</button>
        </div>
      </form>
    </div>
- - >
</table>
-->
<br/>
<br/>
</body>

</html>