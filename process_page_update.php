<?php
include("./session-timeout.php");
?>
<?php include('templates/header.php'); ?>

<main class="center-div">

<?php
    echo "<p class='welcome'>Admin: " . "<a class='blue' href='./profile.php'>" . ucfirst($_SESSION["username"]). "</a>" ."</p>";
?>

<p class="logout"><i class="fa fa-power-off"></i> <a href="./session-logout.php">Logout</a></p>

<h2>Update User</h2>

<?php

//store variable from Add User form
$originalID = $_POST['originalID'];
$id			= $_POST['id'];
$firstname	= $_POST['firstname'];
$lastname	= $_POST['lastname'];

if(!$id || !$firstname || !$lastname || !$originalID){
    echo "<p>Please fill out each field. Return to <a href='./table_students.php'>table</a></p>";
    echo "<br><br><a href='./add_user.php'><i class='fa fa-angle-double-left'></i> Return to Update User Form</a>";
    echo "<br><a href='./table_students.php'><i class='fa fa-angle-double-left'></i> Return to table</a>";
    die();
}

require_once("dbinfo.php");
/* attempt a connection to MySQL */
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
/* determine if connection was successful */
if(mysqli_connect_errno() !=0 ){
    echo "<p>Unable to connect to database</p>";
    die();
}

//Update user
$query  = "UPDATE students SET id='$id', firstname='$firstname', lastname='$lastname' WHERE id='$originalID';";

$result = $mysqli->query( $query );

if($result){
    echo $mysqli->affected_rows." student was updated. <i class='fa fa-check'></i> <br><br><a href='./table_students.php'><i class='fa fa-angle-double-left'></i> Return to table</a>";
} else {
    echo "An error occured. The student was not updated. <br><br><a href='./table_students.php'><i class='fa fa-angle-double-left'></i> Return to table</a>";
}

/* close MySQL connection */
$mysqli->close();

?>
</main>
</body>
</html>