<?php
include("./session-timeout.php");
?>
<?php include('templates/header.php'); ?>

<main class="center-div">

<?php
    echo "<p class='welcome'>Admin: " . "<a class='blue' href='./profile.php'>" . ucfirst($_SESSION["username"]). "</a>" ."</p>";
?>

<p class="logout"><i class="fa fa-power-off"></i> <a href="./session-logout.php">Logout</a></p>

<h2>Delete User</h2>

<?php

require_once("dbinfo.php");
//record specific information via GET
if(isset($_GET["id"])){
    $id = $_GET["id"];
    echo "<p>" . "Confirm deletion of user: " . $id . "</p><br>" ;
    $_SESSION['id'] = $id;
}

?>
<fieldset>
    <form method="post" action="process_page_delete.php">
        <input type="radio" name="confirm" value="yes">Yes<br>
        <input type="radio" name="confirm" value="no">No<br>
        <input type="submit" value="Submit" id="submit"/>
    </form>
</fieldset>
<p class="back"><a href="./table_students.php"><i class="fa fa-angle-double-left"></i> Return to table</a></p>

</main>
</body>
</html>