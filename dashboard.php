<?php
session_start();

$user = $_SESSION['username'];

if (!$user) {

    header("Location: login.php");
}
else {}

if (isset($_POST['logout'])){
    session_destroy();
    header("Location: login.php");
}

?>

<!Doctype html>
<html>
<head></head>
<body>
<h2 align="center">Hello <?php echo $user;?></h2>
<h3>WELCOME TO YOUR DASHBOARD!</h3>
<p>Thanks for coming to view my first PHP project</p>
<form method="post">
<button type="submit" name="logout">Logout</button>
</form>