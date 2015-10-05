<?php
include("./session-timeout.php");
?>

<!DOCTYPE html>
<head>
	<title>PHP MySQL</title>
		<link rel="stylesheet" type="text/css" href="table.css" />

		<style>
		tr:nth-child(odd)		{ background-color:#E7E7E7; }
		tr:nth-child(even)		{ background-color:#fff; }
		</style>
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<main>

	<header>
		<h1>Student Database</h1>
		<?php
    	echo "<p class='welcome'>Admin: " . "<a class='blue' href='./profile.php'>" . ucfirst($_SESSION["username"]). "</a>" ."</p>";
		?>
			<p class="logout"><i class="fa fa-power-off"></i> <a href="./session-logout.php">Logout</a></p>
			<p><i class="fa fa-cog"></i> <a href="./page01.php">CPanel</a></p> 
	</header>
<?php

require_once("dbinfo.php");
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//test database connection
if( mysqli_connect_errno() != 0  ){
	die("<p>Unable to connect to database</p>");
}

//display MySQL table data
$query = "SELECT id, firstname, lastname FROM students;";
$result = $mysqli->query($query);
	echo "<table>";
	echo "<tr><th>ID</th>";
	echo "<th>Firstname</th>";
	echo "<th>Lastname</th></tr>";
	echo "<th><a class='add' href='add_user_admin.php?id='>" . 'ADD USER' . "</a></th>" ;

while(   $record = $result->fetch_assoc() ){
	echo "<tr>";
	echo "<td>" . $record["id"] . "</td>" ;
	echo "<td>" . $record["firstname"] . "</td>" ;
	echo "<td>" . $record["lastname"] . "</td>" ;
	echo "<td><a href='delete_page.php?id=" .$record["id"] . "'>" . 'DELETE' . "</a></td>" ;
	echo "<td><a href='update_page.php?id=" .$record["id"] . "'>" . 'UPDATE' . "</a></td>" ;
	echo "</tr>";
}
echo "</table>";

//close connection
$mysqli->close();
?>
<footer>
	<p>&copy; Kris Wignes<br>For educational use only</p>
</footer>
</main>
</body>
</html>