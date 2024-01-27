<DOCTYPE html>

    <html>

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--==Title==================================-->
        <title>
            YOUR LOCAL MART

        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!--==Stylesheet=============================-->
        <link rel="stylesheet" type="text/css" href="Home Page CSS.css">

        <!--==Fav-icon===============================-->
        <link rel="shortcut icon" href="images/fav-icon.png" />

        <!--==Using-Font-Awesome=====================-->
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>


        <script src='Home Page JS.js' defer></script>

        <link rel="shortcut icon" type="image/jpg" href="C:\Users\hp\Desktop\College\First Semester\Introduction To Web Technologies\Notepad ++ Files\Project\favicon.ico" />

    </head>

    <body>
        <!-- Navigation -->
        <nav class="navigation">
            <!-- Logo -->
            <a href="#" class="logo">
                <img src="assets/images/logo.png" alt="Your Local Mart Logo" style="width: 150px; height: auto;">
            </a>

            <!--menu-btn---->
            <input type="checkbox" class="menu-btn" id="menu-btn">

            <label for="menu-btn" class="menu-icon">

                <span class="nav-icon"></span>

            </label>

            <!--menu-------->
            <ul class="menu">

                <li>
                    <a href="index.php" class="active">

                        Home

                    </a>

                </li>

                <li>

                    <a href="#category">

                        Categories

                    </a>

                </li>


                <li>

                    <a href="Contact Form HTML.html">

                        Contact&nbsp;Us

                    </a>

                </li>

                <li>

                    <a href="Feedback Form HTML.html">

                        Feedback

                    </a>

                </li>

                <li>

                    <a href="Blog.html">

                        Blog

                    </a>

                </li>

                <li>

                    <a href="About Us HTML.html">

                        About&nbsp;us

                    </a>

                </li>

                <li>

                    <a href="Login And Registration HTML.html">

                        Sign&nbsp;up

                    </a>

                </li>


                <li>

                    <a href="Login And Registration HTML.html">

                        Login

                    </a>

                </li>

            </ul>

            <!--right-nav-(cart-like)-->
            <div class="right-nav">

                <!--cart----->
                <a href="Shopping Cart PHP.php" class="cart">

                    <i class="fas fa-shopping-cart"></i>

                </a>

                <!--cart----->
                <a href="Profile HTML.html" class="user-profile">

                    <i class="fas fa-user"></i>

                </a>

            </div>

        </nav>
        <!--nav-end--------------------->






        <!--==Search-banner=======================================-->
        <section id="search-banner">

            <!--bg--------->
            <img alt="bg" class="bg-1" src="https://i.imgur.com/h8pXo1s.png">

            <img alt="bg" class="bg-1_rev" src="https://i.imgur.com/h8pXo1s.png">

            <img alt="bg-2" class="bg-2" src="https://i.imgur.com/2smuQIz.png">

            <!--text------->
            <div class="search-banner-text">

                <h1>

                    Order Your daily Groceries

                </h1>

                <strong>

                    #Free Delivery

                </strong>

                <!--search-box------>
                <form action="" class="search-box">

                    <!--icon------>
                    <i class="fas fa-search"></i>

                    <!--input----->
                    <input type="text" class="search-input" placeholder="Search" name="search" size="80px" required>

                    <!--btn------->
                    <input type="submit" class="search-btn" value="Search">

                </form>

                <br>

            </div>

        </section>

        <!--search-banner-end--------------->


        <!--==category=========================================-->
        <section id="category">

            <!--heading---------------->
            <div class="category-heading">

                <h2>

                    Category

                </h2>

                <span>

                    All

                </span>

            </div>

            <!--box-container---------->
            <div class="category-container">

                <!--box---------------->
                <a class="category-box" href='Fruits & Vegetables Page PHP.php'>
                    <img alt="Fruits and Vegetables" src="https://cdn-icons-png.flaticon.com/128/1594/1594105.png">
                    <span>Fruits & <br> Vegetables</span>
                </a>
                <!--box---------------->
                <a class="category-box" href='Foodgrains, oil and masala Category Page PHP.php'>
                    <img alt="Foodgrains, oil and masala" src="https://cdn-icons-png.flaticon.com/128/2674/2674588.png">
                    <span>Foodgrains, oil <br> & masala</span>
                </a>
                <!--box---------------->
                <a class="category-box" href='Snacks & Biscuits Category Page PHP.php'>
                    <img alt="Snacks & Biscuits" src="https://cdn-icons-png.flaticon.com/128/2515/2515210.png">
                    <span>Snacks &<br> Biscuits</span>
                </a>
                <!--box---------------->
                <a class="category-box" href='Bakery, Cakes & Dairy Category Page PHP.php'>
                    <img alt="Bakery, Cakes & Dairy" src="https://cdn-icons-png.flaticon.com/128/3070/3070877.png">
                    <span>Bakery, Cakes <br> & Dairy </span>
                </a>
                <!--box---------------->
                <!--box---------------->
                <a class="category-box" href="Baby Care Category Page PHP.php">
                    <img alt="Baby Care Products" src="https://i.imgur.com/uvd01HH.png">
                    <span>Baby Care</span>
                </a>
                <!--box---------------->
                <a class="category-box" href='Stationary Category Page PHP.php'>
                    <img alt="Fish" src="https://i.imgur.com/N5a3WUT.png">
                    <span>Stationary</span>
                </a>
                <!--box---------------->
                <a class="category-box" href='Beauty & Hygiene Category Page PHP.php'>
                    <img alt="Beauty & Hygiene Products" src="https://i.imgur.com/Bm0yLex.png">
                    <span>Beauty <br>& Hygiene </span>
                </a>

                <!--box---------------->
                <a class="category-box" href='Beverages Category Page PHP.php'>
                    <img alt="Beverages" src="https://cdn-icons-png.flaticon.com/128/4682/4682208.png">
                    <span>Beverages</span>
                </a>


                </a>
                <!--box---------------->
                <!--box---------------->
            </div>

        </section>
        <!--category-end----------------------------------->




        <!--==Products====================================-->
        <section id="popular-product">
            <!--heading----------->
            <div class="product-heading">
                <h3>Popular Product</h3>
                <span>All</span>
            </div>
            <!--box-container------>
            <div class="product-container">

                <?php include('admin_area/get_popular_products.php'); ?>
                <?php while ($row = $popular_products->fetch_assoc()) { ?>
                    <!--box---------->
                    <div class="product-box">
                        <img alt="apple" src="<?php echo $row['PRODUCT_IMAGE']; ?>">
                        <strong><?php echo $row['PRODUCT_NAME']; ?></strong>
                        <span class="quantity"><?php echo $row['QUANTITY']; ?></span>
                        <span class="price">Rs <?php echo $row['PRODUCT_PRICE']; ?></span>
                        <!--cart-btn------->
                        <a href="Shopping Cart PHP.php" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Add to Cart
                        </a>
                        <!--like-btn------->
                        <a class="like-btn">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>




                <?php } ?>
            </div>
        </section>
        <!--popular-product-end--------------------->



            <!--==Footer=============================================-->
            <footer>
                <div class="footer-container">
                    <!--logo-container------>
                    <div class="footer-logo">
                        <a href=""><span>YOUR</span>LOCAL<SPAN>MART</SPAN></a>
                        <!--social----->
                        <div class="footer-social">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/?lang=en-in"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="footer-links">
                        <strong>Category</strong>
                        <ul>
                            <li><a href="#">Beauty</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Baby</a></li>
                            <li><a href="#">Gardening</a></li>
                        </ul>
                    </div>
                    <!--links-------------------------->
                    <div class="footer-links">
                        <strong>Contact</strong>
                        <ul>
                            <li><a href="#">Phone :515511345561 </a></li>
                            <li><a href="#">Email : yourlocalmart@gmail.com</a></li>
                        </ul>
                        <br>
                        <p style="color: aliceblue;">Copyright ©2023 | All Rights Reserved</p>
                    </div>
                </div>
            </footer>
    </body>

    </html>