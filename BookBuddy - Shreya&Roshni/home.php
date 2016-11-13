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

<style type="text/css">
	body{
		background: url(header.jpg);
	}
</style>


	</head>



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



	<body>


<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <div class="navbar-brand" href="index.php" >BookBuddy</div>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="browse.php">Browse</a></li>
      <li class="active"><a href="home.php">Your Bookshelf</a></li>
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

<!--
		<h2>Home Page</h2>
		<p>Hello <?php //Print $_SESSION['user']?>!</p>
	-->
		<br/><br/>

<!--
		<form method="POST">
			<input type="submit" id="add_book" value="Add a new book" action="newbook.php"/ >
		</form>
	-->

		<h1 align="center" style="color:black;">My Bookshelf</h1>
		<table border="1px" width="80%" align="center" style="color:white;background-color:#404040;">
			<tr>
				
				<th style="text-align:center">Id</th>
				<th style="text-align:center;">Book Name</th>
				<th style="text-align:center;">Posted on</th>
<!--
				<th>Edit Time</th>
				<th>Edit</th>
			-->
			<!--	<th>Delete</th>-->
<!--
				<th>Public Post</th>
-->
			</tr>
			<?php
				mysql_connect("localhost", "root", "");
				mysql_select_db("first_db") or die("Cannot connect to database");
				$query = mysql_query("Select distinct * from list where username='$user'");
				while($row = mysql_fetch_array($query))
				{
					Print "<tr>";
						Print '<td align="center">'.$row['id']."</td>";
						Print '<td align="center">'.$row['details']."</td>";
						Print '<td align="center">'.$row['date_posted']."</td>";
						/*
						Print '<td align="center">'.$row['date_edited']." - ".$row['time_edited']."</td>";
						Print '<td align="center"><a href="edit.php?id">edit</a></td>';
					
											Print '<td align="center"><a href="delete.php?id">delete</a></td>';
											*/
					//	Print '<td align="center">'.$row['public']."</td>";
					Print "</tr>";
				}
			?>
		</table>

<br/>
<br/>
		<form align="center" action="add.php" method="POST" style="color:white;">
			<h3 style="color:black;">Add more to the list </h3><input type="text" name="details" placeholder="Name of book" style="margin-left:25%;height:25px;background-color:#404040;width:50%;"/>
			<input type="submit" align="center" value="Add to the list" style="margin-left:25%;height:30px;color:white;background-color:black;width:50%;text-align:center"/>

		</form>
<br/>
<br/>

		<form align="center" action="delete.php" method="POST" style="color:white;">
			<h3 style="color:black;">Delete from the list </h3><input type="text" name="to_del" placeholder="Enter ID of book" style="margin-left:25%;height:25px;background-color:#404040;width:50%;"/>
			<input type="submit" align="center" value="Delete" style="margin-left:25%;height:30px;color:white;background-color:black;width:50%;text-align:center"/>
		</form>

	</body>
</html>