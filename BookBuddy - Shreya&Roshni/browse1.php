
<?php

mysql_connect("localhost", "root", "");
mysql_select_db("first_db") or die("Cannot connect to database");

$search = mysql_real_escape_string($_POST['search']);

$query = mysql_query("SELECT username,details FROM list WHERE details LIKE '%$search%'");

while($row = mysql_fetch_array($query))
{
	Print "<tr>";
		Print '<td align="center">'.$row['username']."</td>";
		Print '<td align="center">'.$row['details']."</td>";
		Print '<br/>';
	Print "</tr>";
}

?>