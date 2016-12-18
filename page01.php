<?php
include("./session-timeout.php");
?>

<?php
include("./security-guard.php");
?>

<?php include('templates/header.php'); ?>

<main class="center-div">

<?php
    echo "<h2 >Welcome, " . "<a class='userName' href='./profile.php'>" . ucfirst($_SESSION["username"]). "</a>" ."</h2>";
?>

<p class="register"><a href="./profile.php"><i class="fa fa-user" aria-hidden="true"></i>
 View Profile</a></p>

<p class="register"><a href="./add_user.php"><i><i class="fa fa-arrow-circle-o-right"></i> Add Student to Database</i></a></p>
<p><i class="fa fa-database"></i> <a href="./table_students.php"> Manage Database</a></p> 
</main>
<?php include('templates/footer.php'); ?>
</body>
</html>