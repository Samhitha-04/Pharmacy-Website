<?php
session_start(); // Start PHP session

// Check if user is logged in
$user_logged_in = isset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy</title>
    <style>
        html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

body {
    background: url('BG.jpg') no-repeat center center fixed;
    background-size: cover;
}

header {
    background-color: rgba(248, 194, 194, 0.9); /* Make the header background slightly transparent */
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 2em;
    color: #fff;
}

.search-bar {
    display: flex;
    align-items: center;
}

.search-bar input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-right: 10px;
}

.search-bar button {
    padding: 10px;
    background-color: #ccc;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

nav {
    background-color: rgba(235, 245, 251, 0.9); /* Make the nav background slightly transparent */
    padding: 10px;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
}

nav li {
    margin-right: 20px;
}

nav a {
    text-decoration: none;
    color: #000;
}

main {
    padding: 20px;
}

.product-categories {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    grid-gap: 20px;
}

.product-categories h2 {
    margin-bottom: 10px;
}

.product-categories ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.product-categories li {
    margin-bottom: 5px;
}

#a {
    padding-right: 5%;
    padding-left: 5%;
}
</style>
</head>
<body>
    <header>
        <div class="logo"><marquee>Welcome to Pharmacy ♡</marquee></div>       
    </header>
    <nav>
        <ul>
            <li><a href="Main page.php" target="f3">Home</a></li>
            <li><a href="account.php" target="f3">Account</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="myorder.php">My Orders</a></li>
            <?php if ($user_logged_in): ?>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="log.php" target="f3">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    <main>
        <div>
            <img class="alignnone size-full wp-image-1303" src="tab.jpg" alt="Medicine" width="250" height="250"/>
            <img class="alignnone size-full wp-image-1303" src="labtest.jpg" alt="Lab Tests" width="250" height="250"/>
            <img class="alignnone size-full wp-image-1303" src="devices.jpg" alt="Healthcare Devices" width="250" height="250"/> 
            <img class="alignnone size-full wp-image-1303" src="baby care.jpg" alt="Baby Care" width="250" height="250"/>  
            <img class="alignnone size-full wp-image-1303" src="doctor.jpg" alt="Doctor Appointment" width="250" height="250"/>    
            <br>
            <a href="medicine.html" id="a">Medicine</a>
            <a href="lab test.php" id="a">Lab Tests</a>
            <a href="devices.php" id="a">Healthcare Devices</a>
            <a href="baby_care.html" id="a">Baby Care</a>
            <a href="doctor.html" id="a">Doctor Appointment</a>
        </div>
    </main>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.querySelector('.search-bar input');
    const searchButton = document.querySelector('.search-bar button');
    
    searchButton.addEventListener('click', function() {
        const searchTerm = searchInput.value.trim().toLowerCase();
        if (searchTerm !== '') {
            // You can perform your search logic here
            alert('Search term: ' + searchTerm);
        } else {
            alert('Please enter a search term');
        }
    });
});

    </script>
</body>
</html>
