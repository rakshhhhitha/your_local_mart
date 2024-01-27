<?php
// Include the database connection file
include('admin_area/connection.php');

// Use a prepared statement to fetch products with the specified category
$stmt = $conn->prepare("SELECT * FROM products WHERE PRODUCT_CATEGORY = ?");
$productCategory = 'FRUITS & VEGETABLES';
$stmt->bind_param("s", $productCategory);
$stmt->execute();
$FNVProducts = $stmt->get_result();

// Check if any rows are returned
if ($FNVProducts->num_rows > 0) {
    // Start HTML document
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>FRUITS & VEGETABLES Products</title>
        <script src="https://kit.fontawesome.com/5471644867.js" crossorigin="anonymous"></script>
        <!-- Include your Baby Care Category CSS file -->
        <link rel="stylesheet" type="text/css" href="Baby Care Category Page CSS.css">
        <link rel="shortcut icon" type="image/jpg" href="path/to/favicon.ico"/>
    </head>

    <body>

        <section id="popular-product">
            <!--heading----------->
            <div class="product-heading">
                <h2 class='fruits-heading'>FRUITS & VEGETABLES Products</h2>
            </div>
            <!--box-container------>
            <div class="product-container">
                <!--box---------->
                <?php while ($row = $FNVProducts->fetch_assoc()) { ?>
                    <div class="product-box" style="height: 95%;">
                        <img alt="<?php echo $row['PRODUCT_NAME']; ?>" src="<?php echo $row['PRODUCT_IMAGE']; ?>">
                        <strong><?php echo $row['PRODUCT_NAME']; ?></strong>
                        <span class="price">Rs <?php echo $row['PRODUCT_PRICE']; ?></span>
                        <!--cart-btn------->
                        <a href="#" class="cart-btn" style='text-decoration: none;'>
                            <i class="fas fa-shopping-bag"></i> Add to Cart
                        </a>
                        <!--like-btn------->
                        <a class="like-btn" style='text-decoration: none;'>
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </section>

    </body>

    </html>
    <?php
} else {
    // No products found in the 'FRUITS & VEGETABLES' category
    echo "No products found in the 'FRUITS & VEGETABLES' category.";
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();
?>
