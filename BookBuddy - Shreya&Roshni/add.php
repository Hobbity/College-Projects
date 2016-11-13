<?php
	session_start();
	if($_SESSION['user'])
	{	
	}
	else
	{
		header("location:index.php");
	}

	if($_SERVER['REQUEST_METHOD'] = "POST")
	{
		$user = $_SESSION['user'];
		$details = mysql_real_escape_string($_POST['details']);
		$time = strftime("%X");
		$date = strftime("%B %d, %Y");
		$decision = "no";
		$username = $_SESSION['user'];
		$location = mysql_query("SELECT prefloc FROM users WHERE username='$user'");

		mysql_connect("localhost", "root", "") or die(mysql_error());
		mysql_select_db("first_db") or die("Cannot connect to database");
		foreach ($_POST['public'] as $each_check) 
		{
			if($each_check != null)
			{
				$decision = "yes";
			}
		}

		mysql_query("INSERT INTO list (username, details, date_posted, time_posted, public, location) VALUES ('$username','$details','$date','$time','$decision','$location')");
		header("location:home.php");
	}
	else
	{
		header("location:home.php");
	}
?>