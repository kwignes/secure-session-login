<?php
include("./session-timeout.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Delete User</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<main class="center-div">

<?php
    echo "<p class='welcome'>Admin: " . "<a class='blue' href='./profile.php'>" . ucfirst($_SESSION["username"]). "</a>" ."</p>";
?>

<p class="logout"><i class="fa fa-power-off"></i> <a href="./session-logout.php">Logout</a></p>

<h1 class="cpanel">Delete User</h1>

<?php

//store variable from Add User form
$confirm = isset($_POST['confirm']);
$id		 = isset($_POST['id']);

//Check for input
if(!$confirm){
    echo "<p>Please choose either Yes or No</p>";
    echo "<br><br><a href='./delete_page.php'><i class='fa fa-angle-double-left'></i> Return to Delete User page</a>";
    echo "<br><a href='./table_students.php'><i class='fa fa-angle-double-left'></i> Return to table</a>";
    die();
}

require_once("dbinfo.php");
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


//Delete user
if ($_POST['confirm'] == "yes") {
    $id = $_SESSION["id"];
    $query = "DELETE FROM students WHERE id='$id';";
    $result = $mysqli->query($query);
    $rows_affected = $mysqli->affected_rows;
    echo "<p>" . $rows_affected . " record deleted: "  . $id . " <i class='fa fa-check'></i><br><br><a href='./table_students.php'><i class='fa fa-angle-double-left'></i> Return to table</a>";
}
else {
    die("<p>User was not deleted. Return to <a href='./table_students.php'>table</a></p>");
}
/* close MySQL connection */
$mysqli->close();
?>
</main>
</body>
</html>


