<?php
include("./session-timeout.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Add User</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<main class="center-div">

<?php
    echo "<p class='welcome'>Admin: " . "<a class='blue' href='./profile.php'>" . ucfirst($_SESSION["username"]). "</a>" ."</p>";
?>

<p class="logout"><i class="fa fa-power-off"></i> <a href="./session-logout.php">Logout</a></p>

<h1 class="cpanel">Add New User</h1>

<form method="POST" action="process_page_adduser_admin.php">
    <input type="text" name="id" id="id" />
    <label for="id">Student ID</label><br>
    <input type="text" name="firstname" id="firstname" />
    <label for="firstname">First Name</label><br>
    <input type="text" name="lastname" id="lastname" />
    <label for="lastname">Last Name</label><br>
    <input type="submit" id="submit" value="Submit" /><br>
</form>

<p class="back"><a href="./table_students.php"><i class="fa fa-angle-double-left"></i> Return to Table</a></p>

</main>
</body>
</html>
