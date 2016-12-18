<?php
//start session to session out error messages
session_start();
ob_start();

const VALID_PASSWORD = "session";

//hold all error messages
$arrayOfErrorMessages = array();

if( empty($_POST["username"])) {
    echo "<p>Please fill in the username</p>";

    //add the error message to the next available index
    $arrayOfErrorMessages[] = "<span class='error'>Please fill in the username</span>";

} elseif(strlen($_POST["username"]) < 2 ) {

    //add the error message to the next available index
    $arrayOfErrorMessages[] = "<p class='error'>The username needs to be at least 2 characters long.</p>";

} else {
    echo "<span>Username valid</span>";
}

if( empty($_POST["password"]) ){
    echo "<span class='error'>Please fill in the password</span>";

    //add the error message to the next available index
    $arrayOfErrorMessages[] = "<span class='error'>Please fill in the password</span>";

} else {
    echo "<p>Password valid</p>";
}

if(trim($_POST["password"]) == VALID_PASSWORD ) {
    echo "<span>Password is correct</span>";
} else {
    echo "<span class='error'>Password is incorrect: (hint: its 'session')</span>";

    //add the error message to the next available index
    $arrayOfErrorMessages[] = "<span class='error'>Password is incorrect: (hint: its 'session')</span>";
}

if( count($arrayOfErrorMessages) == 0) {
    /* user is ok, log them in */
    $secureID = session_id() . $_SERVER["REMOTE_ADDR"] . "ssjdnfksjdnfkjs" .$_SERVER["HTTP_USER_AGENT"];
    $_SESSION['secureID'] = $secureID;
    echo "<p>No errors were detected</p>";
    $_SESSION["username"] = trim($_POST["username"]);
    header("Location: page01.php");
    die();

} else {
    echo "<span>At least 1 error was detected</span>";
    $_SESSION["errorMessages"] = $arrayOfErrorMessages;
    //if errors detected, send user back to the form...
    header("Location: index.php");
    die();
}


?>
