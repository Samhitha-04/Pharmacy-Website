<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        body {
    height: 100%;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url('bgg.avif') no-repeat center center fixed;
    background-size: cover;
}

.container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
    background: rgba(255, 255, 255, 0.8); /* Adding a white background with some opacity for readability */
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
    background: white; /* Ensure product items have a solid background */
    border-radius: 5px; /* Rounded corners for product items */
}

.product-image {
    margin-bottom: 10px;
}

.product-image img {
    width: 100%;
    height: auto;
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
            <h1>LAB TESTS</h1>
        </header>
        <ul class="product-list">
            <li class="product-item">
                <div class="product-image">
                    <img src="bloodtest.jpeg" alt="Blood Test">
                </div>
                <div class="product-info">
                    <h3>BLOOD TEST</h3>
                    <p class="price">₹400.0</p>
                    <p class="time">Time: 1 hour</p>
                    <p class="instructions">Special Instructions: Fasting required for 8 hours before the test.</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="product_name" value="BLOOD TEST">
                        <input type="hidden" name="price" value="400.0">
                        <button type="submit">ADD TO CART</button>
                    </form>
                </div>
            </li>
            <li class="product-item">
                <div class="product-image">
                    <img src="urinetest.jpg" alt="Urine Test">
                </div>
                <div class="product-info">
                    <h3>URINE TEST</h3>
                    <p class="price">₹700.0</p>
                    <p class="time">Time: 30 minutes</p>
                    <p class="instructions">Special Instructions: Collect midstream urine sample in a sterile container.</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="product_name" value="URINE TEST">
                        <input type="hidden" name="price" value="700.0">
                        <button type="submit">ADD TO CART</button>
                    </form>
                </div>
            </li>
            <li class="product-item">
                <div class="product-image">
                    <img src="Sugar test.webp" alt="diabetes Test">
                </div>
                <div class="product-info">
                    <h3>DIABETES TEST</h3>
                    <p class="price">₹500.0</p>
                    <p class="time">Time: 1 hour</p>
                    <p class="instructions">Special Instructions: Fasting required for 8 hours before the test.</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="product_name" value="DIABETES TEST">
                        <input type="hidden" name="price" value="500.0">
                        <button type="submit">ADD TO CART</button>
                    </form>
                </div>
            </li>
            <li class="product-item">
                <div class="product-image">
                    <img src="fullbody.webp" alt="Full Body Checkup">
                </div>
                <div class="product-info">
                    <h3>Full Body Checkup</h3>
                    <p class="price">₹3000.0</p>
                    <p class="time">Time: 2 hours</p>
                    <p class="instructions">Special Instructions: Fasting required for 12 hours before the test.</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="product_name" value="FULL BODY Checkup">
                        <input type="hidden" name="price" value="3000.0">
                        <button type="submit">ADD TO CART</button>
                    </form>
                </div>
            </li>
            <li class="product-item">
                <div class="product-image">
                    <img src="Thyroid.jpg" alt="Thyroid Profile Test(T3,T4)/TFT">
                </div>
                <div class="product-info">
                    <h3>THYROID PROFILE TEST(T3,T4)/TFT</h3>
                    <p class="price">₹500.0</p>
                    <p class="time">Time: 1 hour</p>
                    <p class="instructions">Special Instructions: Fasting required for 8 hours before the test.</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="product_name" value="THYROID PROFILE TEST(T3,T4)/TFT">
                        <input type="hidden" name="price" value="500.0">
                        <button type="submit">ADD TO CART</button>
                    </form>
                </div>
            </li>
            <li class="product-item">
                <div class="product-image">
                    <img src="covid-19.webp" alt="Covid-19 Test">
                </div>
                <div class="product-info">
                    <h3>COVID-19 TEST</h3>
                    <p class="price">₹500.0</p>
                    <p class="time">Time: 24-48 hours</p>
                    <p class="instructions">Special Instructions: None</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="product_name" value="COVID-19 TEST">
                        <input type="hidden" name="price" value="500.0">
                        <button type="submit">ADD TO CART</button>
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
