<!DOCTYPE html>
<html>
<head>
<title>Add User</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<main class="center-div">
<h1 class="cpanel">Register</h1>

<?php

//store variable from Add User form
$id			= $_POST['id'];
$firstname	= $_POST['firstname'];
$lastname	= $_POST['lastname'];

//Check for input
if(!$id || !$firstname || !$lastname){
    echo "<p>Please fill out each field</p>";
    echo "<br><br><a href='./add_user.php'><i class='fa fa-angle-double-left'></i> Return to Add New User Form</a>";
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
//Add user
$query  = "INSERT INTO students (id, firstname, lastname) VALUES('".$id."','".$firstname."','".$lastname."');";
$result = $mysqli->query( $query );

if($result){
    echo /*$mysqli->affected_rows.*/" Thank you,<br>" . $mysqli->affected_rows. " student has been added to the database. <i class='fa fa-check'></i> <br><br><a href='./index.php'><i class='fa fa-power-off'></i> Exit</a>";
} else {
    echo "An error occured. The item was not added. <br><br><a href='./index.php'><i class='fa fa-power-off'></i> Exit</a>";
}

/* close MySQL connection */
$mysqli->close();

?>

</main>
</body>
</html>
