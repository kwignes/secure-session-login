<?php
include("./session-timeout.php");
?>
<?php include('templates/header.php'); ?>

<main class="center-div">
<h2>Register</h2>

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
    echo /*$mysqli->affected_rows.*/" User has been added to the database. <i class='fa fa-check'></i> <br><br><a href='./table_students.php'><i class='fa fa-angle-double-left'></i> Return to table</a>";
} else {
    echo "An error occured. The item was not added. <br><br><a href='./index.php'><i class='fa fa-power-off'></i> Exit</a>";
}

/* close MySQL connection */
$mysqli->close();

?>

</main>
<?php include('templates/footer.php'); ?>
</body>
</html>