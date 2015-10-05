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
<!DOCTYPE html>
<html>
<head>
    <title>Sessions Login</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<main class="center-div">
<h1>Secure Login Session</h1>
<p><i>--Authorized access only--</i></p>

<form method="POST" action="./session-authorize.php">
    <input type="text" name="username" id="username" placeholder="Enter username"/>
    <label for="username">Username</label><br>
    <input type="password" name="password" id="password" placeholder="--bcit"/>
    <label for="password">Password</label>    
    <p class="register"><a href="./add_user.php"><i><i class="fa fa-arrow-circle-o-right"></i> Add student to database</i></a></p>
    <label for="stylesheet">Stylesheet:</label>
    <select name="stylesheet" id="stylesheet">
        <option name="style" value='./css/style.css' >style.css</option>
        <option name="blue" value='./css/blue.css' >blue.css</option>
        <option name="yellow" value='./css/green.css' >green.css</option>
    </select>
<br>
    <input type="submit" id="submit" value="Submit" />
</form>    
<a href="https://github.com/kwignes" target="_blank"><i class="fa fa-github"></i></a>
</main>
</body>
</html>