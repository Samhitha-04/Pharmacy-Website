<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="success.css">
    <title>Shopping Cart</title>
</head>
<body>
    <header>
        <a href="success.php" class="logo"><img src="login2.png"></a>
        <nav class="navigate">
            <ul>
                <li><a href="success.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <div id="menu"><i class="fas fa-bars"></i></div>
    </header>
    <section class="cart" id="cart">
        <h1>Your Cart</h1>
        <?php
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $index => $product) {
                echo '<div class="cart-item">';
                echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                echo '<h2>' . $product['name'] . '</h2>';
                echo '<p>Price: Rs ' . $product['price'] . '</p>';
                echo '<form method="post" action="remove_from_cart.php">';
                echo '<input type="hidden" name="index" value="' . $index . '">';
                echo '<button class="btn" type="submit">Remove</button>';
                echo '</form>';
                echo '</div>';
            }
        } else {
            echo '<p>Your cart is empty.</p>';
        }
        ?>
    </section>
</body>
</html>

