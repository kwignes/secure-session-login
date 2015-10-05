
<main>
<?php

//session_start();
if( isset($_SESSION["username"])) {

//prevent brute force by adding mixed characters that match authorize page -- extra layer of security
    $secureID = session_id() . $_SERVER["REMOTE_ADDR"] . "ssjdnfksjdnfkjs" .$_SERVER["HTTP_USER_AGENT"];
    if($secureID == $_SESSION['secureID']) {
        // echo "<p>Access granted</p>";
    } else {
        $arrayOfErrorMessages = array();
        $arrayOfErrorMessages[] = "<p class='error1'>You need to log in before viewing private pages</p>";
        $_SESSION["errorMessages"] = $arrayOfErrorMessages;
        header("Location: index.php");
        die();
    }

    // echo "<p class='welcome'>Welcome ".$_SESSION["username"]."</p>";
} else {
    $arrayOfErrorMessages = array();
    $arrayOfErrorMessages[] = "<p class='error1'>You need to log in before viewing private pages</p>";
    $_SESSION["errorMessages"] = $arrayOfErrorMessages;
    header("Location: index.php");
    die();
}

?>
</main>