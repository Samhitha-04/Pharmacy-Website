<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "21711a0578";
$port = 3306; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['username'];
$pass = $_POST['passw'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$errors = [];

// Username validation
if (strlen($user) < 3 || strlen($user) > 20) {
    $errors[] = "Username must be between 3 and 20 characters";
}

// Password validation
if (strlen($pass) < 6) {
    $errors[] = "Password must be at least 6 characters long";
}

// Email validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email address";
}

// Address validation
if (strlen($address) < 10) {
    $errors[] = "Address must be at least 10 characters long";
}

// Phone number validation
if (!preg_match('/^[0-9]{10}$/', $phone)) {
    $errors[] = "Please enter a valid 10-digit phone number";
}

// Check if there are any errors
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
    echo "<a href='register.html'>Go back to registration</a>";
    exit();
}

// Check if username already exists
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("s", $user);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "<script>
            alert('This username is already exist.');
            window.location.href = 'register.html';
          </script>";
    $stmt->close();
    $conn->close();
    exit();
}

$stmt->close();

// Insert new user
$stmt = $conn->prepare("INSERT INTO users (username, passw, email, address, phone) VALUES (?, ?, ?, ?, ?)");
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("sssss", $user, $pass, $email, $address, $phone);

if ($stmt->execute()) {
    // Redirect to login page
    header("Location: log.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
