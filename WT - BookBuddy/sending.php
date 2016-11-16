
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
mysql_connect("localhost", "root", "");
mysql_select_db("first_db") or die("Cannot connect to database");

	$message = mysql_real_escape_string($_POST['message']);
	$receiver = mysql_real_escape_string($_POST['receiver']);
	$sender = $_SESSION['user'];
  $timestamp = date('Y-m-d H:i:s');

if(empty($message))
{
   $msg = "Text can't be empty";
    session_register('msg');
    header("location:sendmsg.php ");
}

  mysql_query("INSERT INTO msg_transfer (sender,receiver,message,time) VALUES ('$sender','$receiver','$message','$timestamp')");
  header("location:messages.php");
}
else
{
	header("location:sendmsg.php");
}
?>