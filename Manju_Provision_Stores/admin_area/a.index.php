<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Local Mart Admin Dashboard</title>
    <!-- Include your CSS and JS files here -->
    <link rel="stylesheet" type="text/css" href="Home Page CSS.css">
    <script src="https://kit.fontawesome.com/5471644867.js" crossorigin="anonymous"></script>
    <script src="Home Page JS.js" defer></script>
</head>
<body>

    <!-- Admin Navigation -->
    <nav class="navigation">
        <a href="#" class="logo">
            <span>M</span>PS Admin
        </a>
        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn" class="menu-icon">
            <span class="nav-icon"></span>
        </label>
        <ul class="menu">
            <!-- Add admin-specific menu items as needed -->
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Manage Products</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
        <div class="right-nav">
            <a href="#" class="like">
                <i class="fas fa-heart"></i>
                <span>2</span>
            </a>
            <a href="#" class="cart">
                <i class="fas fa-shopping-cart"></i>
                <span>2</span>
            </a>
            <a href="#" class="user-profile">
                <i class="fas fa-user"></i>
                <span>1</span>
            </a>
        </div>
    </nav>

    <!-- Admin Main Content -->
    <main>
        <!-- Admin Dashboard Content -->
        <section id="admin-dashboard">
            <h1>Welcome to Your Local Mart Admin Dashboard</h1>
            <!-- Add more admin dashboard components as needed -->
        </section>
    </main>

    <!-- Admin Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <a href=""><span>M</span>PS Admin</a>
                <div class="footer-social">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/?lang=en-in"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <strong>Admin Links</strong>
                <ul>
                    <!-- Add admin-specific links as needed -->
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Manage Products</a></li>
                    <li><a href="#">Orders</a></li>
                    <li><a href="#">Customers</a></li>
                    <li><a href="#">Reports</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <strong>Contact</strong>
                <ul>
                    <li><a href="#">Phone: Your Admin Phone</a></li>
                    <li><a href="#">Email: Your Admin Email</a></li>
                </ul>
                <br>
                <p style="color: aliceblue;">Copyright ©2023 | All Rights Reserved</p>
            </div>
        </div>
    </footer>
</body>
</html>
