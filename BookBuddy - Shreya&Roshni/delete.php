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

		mysql_connect("localhost", "root", "") or die(mysql_error());
		mysql_select_db("first_db") or die("Cannot connect to database");

		$user = $_SESSION['user'];
		$id = mysql_real_escape_string($_POST['to_del']);
		$query = mysql_query("SELECT * FROM list WHERE id='$id'");
		header("location:home.php");

		if($query!=NULL)
		{
			mysql_query("DELETE FROM list WHERE id='$id'");
		}
		else
		{
			Print '<script>alert("No such book exists!")</script>';
		}
	}

	else
	{
		header("location:home.php");
	}

?>