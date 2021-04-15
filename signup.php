<?php
$message = '';
$error = '';

if(isset($_POST)){
    /*
    $filename = "datafile.json";
    $myarray[] = "Name"." " .$_REQUEST['name'];
    $myarray[] = "Email"." " .$_REQUEST['username'];
    $myarray[] = "Username"." " .$_REQUEST['username'];
    $myarray[] = "Password"." " .$_REQUEST['password'];
*/

    if(file_exists('datafile.json'))
		{
			$current_data = file_get_contents('datafile.json');
			$array_data = json_decode($current_data, true);
			$extra = array(
				'name' => $_POST['name'],
				'email' => $_POST['email'],
				'username'=> $_POST['username'],
				'password' => $_POST['password'],
            ); 

			$array_data[] =$extra;
			$final_data = json_encode($array_data);
				
			if(file_put_contents('datafile.json', $final_data ));
           
            }
    
}

?>
<!Doctype html>
<html>
<head></head>
<title>SIGN IN</title>
<body>

<form method="POST">
<h3>SIGN IN</h3>
<?php
if(isset($error))
{
    echo $error;
}
?>
<label>Name:</label>
<input type="text" name="name">
<br>
<br>
<label>Email:</label>
<input type="text" name="email">
<br>
<br>
<label>Username:</label>
<input type="text" name="username">
<br>

<br>
<label>Password:</label>
<input type="password" name="password">

<br>
<br>
<button type="submit">Sign in</button>
<?php
if (isset($message))
{
    echo $message;
}
?>
</form>
</body>






</html>