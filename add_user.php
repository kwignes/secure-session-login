
<!DOCTYPE html>
<html>
<head>
<title>Add User</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<main class="center-div">
<h1 class="cpanel">Register</h1>

<form method="POST" action="process_page_adduser.php">
    <input type="text" name="id" id="id" />
    <label for="id">Student ID</label><br>
    <input type="text" name="firstname" id="firstname" />
    <label for="firstname">First Name</label><br>
    <input type="text" name="lastname" id="lastname" />
    <label for="lastname">Last Name</label><br>
    <input type="submit" id="submit" value="Submit" /><br>
</form>

<p class="back"><a href="./index.php"><i class="fa fa-angle-double-left"></i> Return to Login</a></p>

</main>
</body>
</html>

