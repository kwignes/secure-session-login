<?php
session_start();
ob_start();
  // set timeout period in seconds
$inactive = 600;
// check to see if $_SESSION['timeout'] is set
if(isset($_SESSION['timeout']) ) {
	$session_life = time() - $_SESSION['timeout'];
	if($session_life > $inactive) { 
		echo "Session timed out. Please login again to continue.";
		session_destroy(); header("Location: session-timeout-message.php"); 
	}
}
$_SESSION['timeout'] = time();
?>