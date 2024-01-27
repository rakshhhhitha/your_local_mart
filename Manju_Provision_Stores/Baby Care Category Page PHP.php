<?php
// Include the database connection file
include('admin_area/connection.php');

// Use a prepared statement to fetch products with the specified category
$stmt = $conn->prepare("SELECT * FROM products WHERE PRODUCT_CATEGORY = ?");
$productCategory = 'BABY CARE';
$stmt->bind_param("s", $productCategory);
$stmt->execute();
$babyProducts = $stmt->get_result();

// Check if any rows are returned
if ($babyProducts->num_rows > 0) {
    // Start HTML document
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Baby Care Products</title>
        <script src="https://kit.fontawesome.com/5471644867.js" crossorigin="anonymous"></script>
        <!-- Include your Baby Care Category CSS file -->
        <link rel="stylesheet" type="text/css" href="Baby Care Category Page CSS.css">
        <link rel="shortcut icon" type="image/jpg" href="path/to/favicon.ico"/>
    </head>

    <body>

        <section id="popular-product">
            <!--heading----------->
            <div class="product-heading">
                <h2 class='fruits-heading'>Baby Care Products</h2>
            </div>
            <!--box-container------>
            <div class="product-container">
                <!--box---------->
                <?php while ($row = $babyProducts->fetch_assoc()) { ?>

                    <div class="product-box" style="height: 95%;">
                        <img alt="<?php echo $row['PRODUCT_NAME']; ?>" src="<?php echo $row['PRODUCT_IMAGE']; ?>">
                        <strong><?php echo $row['PRODUCT_NAME']; ?></strong>
                        <span class="price">Rs <?php echo $row['PRODUCT_PRICE']; ?></span>
                        <!-- Add a quantity input field -->
                        <label for="quantity">Quantity:</label>
                        <input type="number" name="QUANTITY" value="1" min="1">
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
                <!--form outside of the loop-->
                <form method="post" action="Shopping Cart PHP.php">
                    <input type="hidden" name="PRODUCT_ID" value="<?php echo $row["PRODUCT_ID"];?>">
                    <input type="hidden" name="PRODUCT_IMAGE" value="<?php echo $row['PRODUCT_IMAGE']; ?>">
                    <input type="hidden" name="PRODUCT_NAME" value="<?php echo $row['PRODUCT_NAME']; ?>">
                    <input type="hidden" name="PRODUCT_PRICE" value="<?php echo $row['PRODUCT_PRICE']; ?>">
                    <button type="submit" class="cart-btn" style='text-decoration: none;'>
                        <i class="fas fa-shopping-bag"></i> Add to Cart
                    </button>    
                </form>
            </div>
        </section>

    </body>

    </html>
    <?php
} else {
    // No products found in the 'BABY CARE' category
    echo "No products found in the 'BABY CARE' category.";
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();
?>
