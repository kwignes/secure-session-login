<?php
include("./session-timeout.php");
?>

<?php
include("./security-guard.php");
?>

<?php include('templates/header.php'); ?>

<main>
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
</main>
<?php include('templates/footer.php'); ?>
</body>
</html>