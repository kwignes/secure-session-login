<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sessions Logout</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<main class="center-div">
<h1>Sessions Logout</h1>

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
</body>
</html>