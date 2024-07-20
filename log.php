<?php
// Start session to handle user-specific actions
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username and password (replace this with your actual validation logic)
    $valid_username = "admin"; // Example username
    $valid_password = "password"; // Example password

    // Retrieve username and password from POST data
    $username = $_POST['uname'];
    $password = $_POST['pwd'];

    // Check if the username and password match the valid credentials
    if ($username == $valid_username && $password == $valid_password) {
        // Authentication successful, start session and store user ID (or other relevant data)
        $_SESSION['user_id'] = 1; // Example user ID (you can replace this with your actual user ID from the database)
        $_SESSION['username'] = $username; // Store username in session

        // Redirect to the product list page or any other authorized page
        header('Location: product_list.php');
        exit();
    } else {
        // Authentication failed, you can set an error message or handle it accordingly
        $error_message = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <style>
body {
  background-image: url('bg3.webp');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body>
<form style="width:500px;" align="center" action="login.php" method="post">
<table align="center">
	<td>
	<div style="margin-left:470px;border:2px solid black;width:420px;height:420px;float:left;align:center;">
	<table align="center" border="0" width="100%" cellspacing="20">
	<tr>
	<td align="center">
	<input type="text" name="uname" maxlength="25" placeholder="USERNAME" size="30"/><br><br>
	<input type="password" name="pwd"  placeholder="PASSWORD" size="30"/><br><br>
	<button name="login" value="click">login</button>
	<input type="reset" value="Reset"><br>
	<h2>NewUser<h2><br>
	<a href="register.html" target="f3">CREATE AN ACCOUNT</a>
	</td>
     </table>
</table>
</div>
</form>
</body>
</html>
    