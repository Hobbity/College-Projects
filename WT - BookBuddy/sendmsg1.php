
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("first_db") or die("Cannot connect to database");


	$message = mysql_real_escape_string($_POST['message']);
	$receiver = mysql_real_escape_string($_POST['receiver']);
	$sender = $_SESSION['user'];

mysql_query("INSERT INTO msg_transfer (sender,receiver,message) VALUES ('$sender','$receiver','$message')");


?>