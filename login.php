<?php
session_start();

if (isset($_POST['login'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pwd'];

    
    $con = new mysqli("localhost", "root", "", "21711a0578", 3306);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    
    $stmt = $con->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        if ($pass == $row['passw']) {  
            $_SESSION["uname"] = $uname;
            header("Location: Main page.php"); 
            exit();
        } else {
            echo "<script>alert('Invalid username or password'); window.location.href = 'login.html';</script>";
        }
    } else {
        echo "<script>alert('Invalid username or password'); window.location.href = 'login.html';</script>";
    }

    $stmt->close();
    $con->close();
}
?>
