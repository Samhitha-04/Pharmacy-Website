<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
    body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('bgg.avif'); /* Ensure the image file is correctly named and located */
    background-size: cover;
}

.container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8); /* Adding a semi-transparent white background to the container */
    border-radius: 10px; /* Rounded corners for better aesthetics */
}

header {
    text-align: center;
}

.product-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-wrap: wrap;
}

.product-item {
    width: 29%;
    margin: 10px;
    padding: 10px;
    border: 1px solid #ddd;
    text-align: center;
    background: white; /* Ensure product items have a solid white background */
    border-radius: 5px; /* Rounded corners for product items */
}

.product-image {
    margin-bottom: 10px;
}

.product-image img {
    width: 70%;
}

.product-info {
    margin-bottom: 10px;
}

.product-info h3 {
    font-size: 18px;
    margin-bottom: 5px;
}

.rating {
    color: #f1c40f;
}

.price {
    font-weight: bold;
}

form button {
    background-color: #007bff; /* Blue background for Add to Cart button */
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

form button:hover {
    background-color: #0067cc; /* Darker blue on hover */
}

#back-btn {
    background-color: #8a2be2; /* Violet background for Go Back button */
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px;
}

#back-btn:hover {
    background-color: #6a0dad; /* Darker violet on hover */
}

/* Add media queries for responsive design */
@media (max-width: 768px) {
    .product-item {
        width: 50%;
    }
}

@media (max-width: 480px) {
    .product-item {
        width: 100%;
    }
}
</style>
</head>
<body>
    <div class="container">
        <header>
            <h1>HEALTHCARE DEVICES</h1>
        </header>
        <ul class="product-list">
            <li class="product-item">
                <div class="product-image">
                    <img src="Blood Pressure.webp" alt="Blood Pressure Monitor">
                </div>
                <div class="product-info">
                    <h3>BLOOD PRESSURE MONITOR</h3>
                    <span class="rating">5.0</span>
                    <p class="price">₹800.0</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="product_name" value="BLOOD PRESSURE MONITOR">
                        <input type="hidden" name="price" value="800.0">
                        <button type="submit" class="add-to-cart">ADD TO CART</button>
                    </form>
                </div>
            </li>
            <li class="product-item">
                <div class="product-image">
                    <img src="oximeter.jpeg" alt="Oximeter">
                </div>
                <div class="product-info">
                    <h3>OXIMETER</h3>
                    <span class="rating">4.5</span>
                    <p class="price">₹1300.0</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="product_name" value="OXIMETER">
                        <input type="hidden" name="price" value="1300.0">
                        <button type="submit" class="add-to-cart">ADD TO CART</button>
                    </form>
                </div>
            </li>
            <li class="product-item">
                <div class="product-image">
                    <img src="sugar tesing machine.jpeg" alt="Sugar Testing Machine">
                </div>
                <div class="product-info">
                    <h3>SUGAR TESTING MACHINE</h3>
                    <span class="rating">4.5</span>
                    <p class="price">₹700.0</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="product_name" value="SUGAR TESTING MACHINE">
                        <input type="hidden" name="price" value="700.0">
                        <button type="submit" class="add-to-cart">ADD TO CART</button>
                    </form>
                </div>
            </li>
            <li class="product-item">
                <div class="product-image">
                    <img src="Thermometer.jpeg" alt="Thermometer">
                </div>
                <div class="product-info">
                    <h3>THERMOMETER</h3>
                    <span class="rating">4.5</span>
                    <p class="price">₹150.0</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="product_name" value="THERMOMETER">
                        <input type="hidden" name="price" value="150.0">
                        <button type="submit" class="add-to-cart">ADD TO CART</button>
                    </form>
                </div> 
            </li>
            <li class="product-item">
                <div class="product-image">
                    <img src="Bodymassager.jpg" alt="Body Massager">
                </div>
                <div class="product-info">
                    <h3>BODY MASSAGER</h3>
                    <span class="rating">4.5</span>
                    <p class="price">₹1000.0</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="product_name" value="BODY MASSAGER">
                        <input type="hidden" name="price" value="1000.0">
                        <button type="submit" class="add-to-cart">ADD TO CART</button>
                    </form>
                </div>
            </li>
            <li class="product-item">
                <div class="product-image">
                    <img src="covidselftest.webp" alt="Covid-19 Self test kit">
                </div>
                <div class="product-info">
                    <h3>COVID-19 SELF TEST KIT</h3>
                    <span class="rating">5.0</span>
                    <p class="price">₹200.0</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="product_name" value="COVID-19 SELF TEST KIT">
                        <input type="hidden" name="price" value="200.0">
                        <button type="submit" class="add-to-cart">ADD TO CART</button>
                    </form>
                </div>
            </li>
        </ul>
    <button id="back-btn" onclick="history.back()">Go Back</button>
    </div>
    <script>
        const addToCartButtons = document.querySelectorAll('.add-to-cart');

addToCartButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Simulate adding the product to the cart (replace with your actual logic)
    alert('"' + button.parentNode.querySelector('h3').textContent + '" has been added to your cart!');
  });
});
const backButton = document.getElementById('back-btn');

backButton.addEventListener('click', () => {
  window.history.back();
});

    </script>
</body>
</html>
