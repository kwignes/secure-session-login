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

require_once("dbinfo.php");

//record specific information via GET
if(isset($_GET["id"])){
    $id = $_GET["id"];
    echo "<p class='red'>" . "Update User: " . $id .  "</p>" ;
}

?>

<form method="POST" action="process_page_update.php">
    <input type="text" name="id" id="id" placeholder="Student ID" />
    <input type="text" name="firstname" id="firstname" placeholder="Firstname"/>
    <input type="text" name="lastname" id="lastname" placeholder="Lastname"/>
    <input type="hidden" name="originalID" value="<?php echo $id ?>"><br>
    <input type="submit" id="submit" value="Submit" /><br />
</form>

<p class="back"><a href="./table_students.php"><i class="fa fa-angle-double-left"></i> Return to table</a></p>

</main>
</body>
</html>