<!DOCTYPE html>
<html lang="en">
<head>
<form style= align="center" action="account.php" method="post">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Account</title>
    <link rel="stylesheet" type="text/css" href="account.css">
</head>
<body>
    <header>
        <h1>Pharmacy Account</h1>
        <nav>
            <a href="Main page.php">Home</a>
            <a href="log.php" id="logout">Logout</a>
        </nav>
    </header>
    <div class="container">
                <div class="main-content">
<?php

session_start(); // Start PHP session

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Update with your MySQL root password
$dbname = "21711a0578";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$user = $_SESSION["uname"];

$sql = "SELECT email,address,phone FROM users WHERE username = '$user'";
$result = $con->query($sql);

 if ($result->num_rows > 0 && $user) {
    $row = $result->fetch_assoc();
    $email = $row["email"];
    $address = $row["address"]; // Retrieve user's address
    $phone = $row["phone"]; // Retrive user's phone number
    $_SESSION["email"] = $email; // Set the "email" key in session data
} else {
    $email = "";
    $address = "";
    $phone = "";
}

 echo "<h2>Welcome, $user!!</h2>";?>
            <p>Edit your account information:</p>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="username" name="username" class="input-field" placeholder="username" value="<?php echo $user; ?>"><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="input-field" placeholder="[User's Email]" value="<?php echo  $email; ?>"><br><br>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" class="input-field" placeholder="[User's Address]"value="<?php echo $address; ?>"><br><br> <!-- Add address field -->
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" class="input-field" placeholder="[User's Phone Number]"value="<?php echo $phone; ?>"><br><br> <!-- Add phone field -->

            </form>
        </div>
        
    </div>

    <script>
        document.querySelector("form").addEventListener("submit", function(event) {
            event.preventDefault();
            // You can add JavaScript code here to handle form submission, like sending data to the server.
            // For this example, we're just preventing the default form submission behavior.
        });

        function logout() {
            // Redirect to the logout page
            window.location.href = "logout.html";
        }
    </script>
</body>
</html>
