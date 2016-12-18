
<?php include('templates/header.php'); ?>

<main class="center-div">

<h2>Register</h2>

<form method="POST" action="process_page_adduser.php">
    <input type="text" name="id" id="id" />
    <label for="id">Student ID</label><br>
    <input type="text" name="firstname" id="firstname" />
    <label for="firstname">First Name</label><br>
    <input type="text" name="lastname" id="lastname" />
    <label for="lastname">Last Name</label><br>
    <input type="submit" id="submit" value="Submit" /><br>
</form>

<p class="back"><a href="./page01.php"><i class="fa fa-angle-double-left"></i> Return to Dashboard</a></p>

</main>
<?php include('templates/footer.php'); ?>
</body>
</html>

