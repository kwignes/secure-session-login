<?php
include("./session-timeout.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Update User</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<main class="center-div">

<?php
    echo "<p class='welcome'>Admin: " . "<a class='blue' href='./profile.php'>" . ucfirst($_SESSION["username"]). "</a>" ."</p>";
?>

<p class="logout"><i class="fa fa-power-off"></i> <a href="./session-logout.php">Logout</a></p>

<h1 class="cpanel">Update User</h1>

<?php

require_once("dbinfo.php");

//record specific information via GET
if(isset($_GET["id"])){
    $id = $_GET["id"];
    echo "<p class='red'>" . "Update User: " . $id .  "</p>" ;
}

?>

<form method="POST" action="process_page_update.php">
    <input type="text" name="id" id="id" />
    <label for="id">Student Number:</label>
    <input type="text" name="firstname" id="firstname" />
    <label for="firstname">First Name:</label>
    <input type="text" name="lastname" id="lastname" />
    <label for="lastname">Last Name:</label>
    <input type="hidden" name="originalID" value="<?php echo $id ?>"><br>
    <input type="submit" id="submit" value="Submit" /><br />
</form>

<p class="back"><a href="./table_students.php"><i class="fa fa-angle-double-left"></i> Return to table</a></p>

</main>
</body>
</html>