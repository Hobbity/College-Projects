<?php
	
	session_start();
	mysql_connect("localhost", "root", "");
	mysql_select_db("first_db") or die("Cannot connect to database");

	if($_SERVER['REQUEST_METHOD'] = "POST")
	{
		$name = mysql_real_escape_string($_POST["add_book"]);
	}
	$query_insert = mysql_query("INSERT into user_books values ("$name", "$author", "$age")");

?>