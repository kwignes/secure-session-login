<?php
session_start();
ob_start();
?>
<?php include('templates/header.php'); ?>
<main class="center-div">
<h2>Login</h2>
<?php
if( isset($_SESSION["errorMessages"])) {
    $messages = $_SESSION["errorMessages"];
    foreach($messages as $message) {
        echo "$message";
    }
    unset($_SESSION["errorMessages"]);
}
?>
<form method="POST" action="./session-authorize.php">
    <input type="text" name="username" id="username" placeholder="Enter username"/>
    <input type="password" name="password" id="password" placeholder="Enter password (session)"/>
    <input type="submit" id="submit" value="Submit" />
</form>  
</main>
<?php include('templates/footer.php'); ?>
</body>
</html>