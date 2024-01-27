<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUR LOCAL MART</title>
    <link rel="stylesheet" type="text/css" href="Home Page CSS.css">
    <link rel="shortcut icon" href="images/fav-icon.png" />
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navigation -->
    <nav class="navigation">
        <a href="#" class="logo">
            <img src="assets/images/logo.png" alt="Your Local Mart Logo" style="width: 150px; height: auto;">
        </a>
        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn" class="menu-icon">
            <span class="nav-icon"></span>
        </label>
        <ul class="menu">
            <li><a href="index.php" class="active">Back to Home</a></li>
        </ul>
    </nav>

    <!-- Shopping Cart -->
    <div class="cart-container">
        <h1>Shopping Cart</h1>

        <!-- Products -->
        <div class="products">
            <div class="product">
                <img src="https://i.imgur.com/oYbYgGQ.jpg" alt="Chakki Fresh Atta">
                <div class="product-info">
                    <h3 class="product-name">Chakki Fresh Atta</h3>
                    <h4 class="product-price">Rs. 350</h4>
                    <h4 class="product-offer">50%</h4>
                    <p class="product-quantity">
                        Qnt: <input value="1" name="">
                    </p>
                    <p class="product-remove">
                        <i class="fas fa-trash-alt"></i>
                        <span class="remove">Remove</span>
                    </p>
                </div>
            </div>

            <div class="product img">
                <img src="https://i.imgur.com/mHmTIxp.jpg" alt="Maggie">
                <div class="product-info">
                    <h3 class="product-name">Maggie</h3>
                    <h4 class="product-price">Rs. 10</h4>
                    <h4 class="product-offer">20%</h4>
                    <p class="product-quantity">
                        Qnt: <input value="1" name="">
                    </p>
                    <p class="product-remove">
                        <i class="fas fa-trash-alt"></i>
                        <span class="remove">Remove</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Cart Total -->
        <div class="cart-total">
            <p>
                <span>Total Price</span>
                <span>Rs. 183</span>
            </p>
            <p>
                <span>No. of Items</span>
                <span>2</span>
            </p>
            <p>
                <span>You Save</span>
                <span>Rs. 177</span>
            </p>
            <a href="Details For Checkout HTML.html">Proceed to Checkout</a>
        </div>
        
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <a href=""><span>YOUR</span>LOCAL<SPAN>MART</SPAN></a>
                <div class="footer-social">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/?lang=en-in"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Product Links -->
            <div class="footer-links">
                <strong>Product</strong>
                <ul>
                    <li><a href="#">Grocery</a></li>
                    <li><a href="#">Packages</a></li>
                    <li><a href="#">Popular</a></li>
                    <li><a href="#">New</a></li>
                </ul>
            </div>

            <!-- Category Links -->
            <div class="footer-links">
                <strong>Category</strong>
                <ul>
                    <li><a href="#">Beauty</a></li>
                    <li><a href="#">Vegetables</a></li>
                    <li><a href="#">Baby</a></li>
                    <li><a href="#">Gardening</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="footer-links">
                <strong>Contact</strong>
                <ul>
                    <li><a href="#">Phone: 515511345561</a></li>
                    <li><a href="#">Email: yourlocalmart@gmail.com</a></li>
                </ul>
                <br>
                <p style="color: aliceblue;">Copyright © 2023 | All Rights Reserved</p>
            </div>
        </div>
    </footer>
</body>

</html>
