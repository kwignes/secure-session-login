<?php
include("./session-timeout.php");
?>

<?php
include("./security-guard.php");
?>
<?php include('templates/header.php'); ?>

<main class="center-div">
<?php
    echo "<p class='welcome'>" . ucfirst($_SESSION["username"]) ."</p>";
?>
<p class="logout"><i class="fa fa-power-off"></i> <a href="./session-logout.php">Logout</a></p>

<h2>Profile</h2>
<img src="./img/defaultpic.png" alt="Default Profile Picture" class="profile-pic">
<p><i class="fa fa-cog"></i><a href="./page01.php"> CPanel</a></p> 
<p><i class="fa fa-database"></i> <a href="./table_students.php"> Manage Database</a></p> 

<?php
  // set timeout period in seconds
$inactive = 600;
// check to see if $_SESSION['timeout'] is set
if(isset($_SESSION['timeout']) ) {
	$session_life = time() - $_SESSION['timeout'];
	if($session_life > $inactive)
        { session_destroy(); header("Location: session-logout.php"); }
}
$_SESSION['timeout'] = time();
?>
</main>
</body>
</html>