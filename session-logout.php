<?php
session_start();
ob_start();
?>
<?php
include("./security-guard.php");
?>
<?php include('templates/header.php'); ?>

<main class="center-div">
<h2>Logout</h2>

<p>You have successfully logged out.</p>
<?php
/*

 $_SESSION = array(); - empty unset() all session variable
 $_SESSION_destroy(); - delete the unique ID

 */
$_SESSION = array();
session_destroy();
?>
<p><a href="./index.php"><i class="fa fa-power-off"></i> Exit</a></p>
</main>
<?php include('templates/footer.php'); ?>
</body>
</html>