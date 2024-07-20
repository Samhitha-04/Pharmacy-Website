<?php
session_start(); // Start session to retrieve cart items

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

// Variable to track if payment was successfully processed (simulate success here)
$payment_success = false;

// Process form submission (simulating payment success)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and process payment (example: assume payment is successful)
    // For demonstration, let's assume payment is always successful for now
    $payment_success = true;

    // Clear cart after successful payment (if needed)
    // Example: You might want to empty the cart table after successful payment
    $clear_cart_sql = "TRUNCATE TABLE cart"; // Example query to empty the cart table
    if ($conn->query($clear_cart_sql) === TRUE) {
        // Cart cleared successfully
    } else {
        echo "Error clearing cart: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="payment.css"> <!-- Link to your CSS file for styling -->
</head>
<body>
    <div class="container">
        <h1>Payment Details</h1>
        
        <?php if ($result->num_rows > 0): ?>
            <ul>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <li>
                        Product Name: <?php echo htmlspecialchars($row['product_name']); ?> - 
                        Price: ₹<?php echo number_format($row['price'], 2); ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <p>No orders found.</p>
        <?php endif; ?>

        <?php if ($payment_success): ?>
            <div class="success-message">
                <p>Payment successful!</p>
                <p>Thank you for your order.</p>
            </div>
        <?php else: ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="card_number">Card Number:</label><br>
                <input type="text" id="card_number" name="card_number" required><br><br>

                <label for="expiry_date">Expiry Date:</label><br>
                <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YYYY" required><br><br>

                <label for="cvv">CVV:</label><br>
                <input type="text" id="cvv" name="cvv" maxlength="3" required><br><br>

                <input type="submit" value="Submit Payment" class="submit-btn">
            </form>
        <?php endif; ?>
    </div>
</body>
</html>

<?php
$conn->close();
?>
