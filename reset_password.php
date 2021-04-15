<?php


if($_POST){
    $filename = "datafile.json";

    $myarray[] = "Username"." " .$_REQUEST['username'];
    $myarray[] = "Password"." " .$_REQUEST['password'];

    $user_data = implode("\n", $myarray);
    $numbytes = file_put_contents($filename, $user_data);
    $array = file($filename);
   header("Location:login.php");
}


?>

<!Doctype html>
<html>
<head></head>
<title>Reset Password</title>
<body>

<form method="post">
<h3>RESET YOUR PASSWORD</h3>
<h6>Enter New login Data</h6>
<label>Username</label>
<input type="text" name="username">
<br>
<br>

<label>Password</label>
<input type="password" name="password">

<br>

<br>

<button type="submit">Reset</button>
</form>
