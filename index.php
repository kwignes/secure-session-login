<?php
session_start();
ob_start();
if( isset($_SESSION["errorMessages"])) {
    $messages = $_SESSION["errorMessages"];
    foreach($messages as $message) {
        echo "<p>$message</p>";
    }
    unset($_SESSION["errorMessages"]);
}
?>
<?php include('templates/header.php'); ?>
<main class="center-div">
<h1>Login</h1>
<form method="POST" action="./session-authorize.php">
    <input type="text" name="username" id="username" placeholder="Enter username"/>
    <input type="password" name="password" id="password" placeholder="Enter password (bcit)"/>
<br>
    <input type="submit" id="submit" value="Submit" />
    <p class="register"><a href="./add_user.php"><i><i class="fa fa-arrow-circle-o-right"></i> Add student to database</i></a></p>
</form>
<div class="github"><a href="https://github.com/kwignes/secure_session_login" target="_blank"><i class="fa fa-github"></i></a></div>    
</main>
</body>
</html>