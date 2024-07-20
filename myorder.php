<?php
@include 'config.php';

$servername = "localhost";
$username = "root";
$password = ""; // Update with your MySQL root password
$dbname = "21711a0578";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all orders from cart table
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <link rel="stylesheet" href="myorders.css"> <!-- Link to your CSS file for styling -->
</head>
<body>
    <div class="container">
        <h1>My Orders</h1>
        
        <?php
        if ($result->num_rows > 0) {
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>";
                echo "Product Name: " . htmlspecialchars($row['product_name']) . " - ";
                echo "Price: ₹" . number_format($row['price'], 2);
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "No orders found.";
        }
        ?>

        <br><br>
        <a href="payment.php" class="proceed-link">Proceed to Payment</a>
    </div>
</body>
</html>

<?php
$conn->close();
?>
