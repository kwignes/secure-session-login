<?php
include("./session-timeout.php");
?>

<?php
include("./security-guard.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Sessions Page 1</title>
    <link rel="stylesheet" href="./css/style.css" />
    <?php echo '<link rel="stylesheet" href="'.$_SESSION['stylesheet'].'">' ?>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<main class="center-div">
<?php
    echo "<p class='welcome'>Welcome, " . "<a class='blue' href='./profile.php'>" . ucfirst($_SESSION["username"]). "</a>" ."</p>";
?>
<p class="logout"><i class="fa fa-power-off"></i> <a href="./session-logout.php">Logout</a></p>

<h1 class="cpanel">Control Panel</h1>

<p><i class="fa fa-cog"></i> CPanel</p> 
<p><i class="fa fa-database"></i> <a href="./table_students.php"> Manage Database</a></p> 
</main>
</body>
</html>