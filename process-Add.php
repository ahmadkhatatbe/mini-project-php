<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["product-name"];
    $description = $_POST["product-description"];
    $price = $_POST["product-price"];

   $productimage = $_FILES['image'];
            $imagePath = 'upload' . $productimage['name'];
            move_uploaded_file($productimage['tmp_name'], $imagePath);
   

session_set_cookie_params(604800);


ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_maxlifetime', 604800);

 


    $product = array(
        "name" => $name,
        "price" => $price,
        "description" => $description,
        "image" =>$imagePath
    );

    // Add the product to the session array
    $_SESSION["products"][] = $product;

    // Redirect back to the form page
  header("location:Addproduct.php");
    exit();
}

