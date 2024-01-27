<?php
session_start();

if (isset($_POST['add_to_cart'])) {
    // If the user has already added a product to the cart
    if (isset($_SESSION['Shopping Cart'])) {
        $PRODUCT_ARRAY_IDS = array_column($_SESSION['Shopping Cart'], "PRODUCT_ID");

        // Check if the product has already been added to the cart
        if (!in_array($_POST['PRODUCT_ID'], $PRODUCT_ARRAY_IDS)) {
            $PRODUCT_ARRAY = array(
                'PRODUCT_ID' => $_POST['PRODUCT_ID'],
                'PRODUCT_NAME' => $_POST["PRODUCT_NAME"],
                'PRODUCT_PRICE' => $_POST["PRODUCT_PRICE"],
                'PRODUCT_IMAGE' => $_POST["PRODUCT_IMAGE"],
                'QUANTITY' => $_POST['QUANTITY']
            );
            $_SESSION['Shopping Cart'][$PRODUCT_ARRAY['PRODUCT_ID']] = $PRODUCT_ARRAY;

            // Product has been successfully added
        } else {
            echo '<script>alert("Product was already added to the cart")</script>';
            echo '<script>window.location= "index.php";</script>';
        }
    } else {
        $PRODUCT_ID = $_POST["PRODUCT_ID"];
        $PRODUCT_NAME = $_POST["PRODUCT_NAME"];
        $PRODUCT_PRICE = $_POST["PRODUCT_PRICE"];
        $PRODUCT_IMAGE = $_POST["PRODUCT_IMAGE"];
        $QUANTITY = $_POST["QUANTITY"];

        $PRODUCT_ARRAY = array(
            'PRODUCT_ID' => $PRODUCT_ID,
            'PRODUCT_NAME' => $PRODUCT_NAME,
            'PRODUCT_PRICE' => $PRODUCT_PRICE,
            'PRODUCT_IMAGE' => $PRODUCT_IMAGE,
            'QUANTITY' => $QUANTITY
        );
        $_SESSION['Shopping Cart'][$PRODUCT_ARRAY['PRODUCT_ID']] = $PRODUCT_ARRAY;
    }
} else {
    header('location: index.php');
}
?>
