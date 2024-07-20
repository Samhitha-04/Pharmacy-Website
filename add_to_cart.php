<?php
include 'config.php'; // Ensure your database connection details are included correctly

// Validate and sanitize input (simplified for demonstration)
$product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
$price = isset($_POST['price']) ? floatval($_POST['price']) : 0.0; // Sanitize price

if (empty($product_name) || empty($price)) {
    die("Error: Product name and price are required.");
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement using prepared statements to prevent SQL injection
$sql = "INSERT INTO cart (product_name, price) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sd", $product_name, $price); // 's' for string, 'd' for double/float

if ($stmt->execute()) {
    // Fetch the last inserted product details
    $inserted_product_id = $stmt->insert_id;
    $select_sql = "SELECT * FROM cart WHERE id = ?";
    $stmt_select = $conn->prepare($select_sql);
    $stmt_select->bind_param("i", $inserted_product_id);
    $stmt_select->execute();
    $result = $stmt_select->get_result();

    // Display product details
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Added to Cart</title>
    <link rel="stylesheet" href="add_to_cart.css">
</head>
<body>
    <div class="container">
        <h1>Product added to cart successfully!</h1>
        <div class="product-details">
            <p><strong>Product Name:</strong> <?php echo htmlspecialchars($row['product_name']); ?></p>
            <p><strong>Price:</strong> ₹<?php echo number_format($row['price'], 2); ?></p>
        </div>
    </div>
</body>
</html>

<?php
    } else {
        echo "Error fetching product details from database";
    }
} else {
    echo "Error: Failed to add product to cart. Please try again later.";
    // Log the error for debugging purposes
    error_log("Error: " . $sql . " - " . $stmt->error);
}

// Close connections and statements
$stmt->close();
$stmt_select->close();
$conn->close();
?>
