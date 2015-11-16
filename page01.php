<?php
include("./session-timeout.php");
?>

<?php
include("./security-guard.php");
?>

<?php include('templates/header.php'); ?>

<main class="center-div">
<?php
    echo "<p class='welcome'>Welcome, " . "<a class='blue' href='./profile.php'>" . ucfirst($_SESSION["username"]). "</a>" ."</p>";
?>
<p class="logout"><i class="fa fa-power-off"></i> <a href="./session-logout.php">Logout</a></p>

<h2>Control Panel</h2>

<p><i class="fa fa-cog"></i> CPanel</p> 
<p><i class="fa fa-database"></i> <a href="./table_students.php"> Manage Database</a></p> 
</main>
</body>
</html>