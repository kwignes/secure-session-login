<?php
include("./session-timeout.php");
?>
<?php
include("./security-guard.php");
?>
<?php include('templates/header.php'); ?>

<main class="center-div">

<?php
    echo "<p class='welcome'>Admin: " . "<a class='blue' href='./profile.php'>" . ucfirst($_SESSION["username"]). "</a>" ."</p>";
?>

<p class="logout"><i class="fa fa-power-off"></i> <a href="./session-logout.php">Logout</a></p>

<h2>Add New User</h2>

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
<?php include('templates/footer.php'); ?>
</body>
</html>
