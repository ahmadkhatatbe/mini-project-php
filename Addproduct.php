
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/Addproduct.css">
   
    <title>Add product</title>
   <style>
    * {
  margin: 0;
  padding: 0;
}
body {
  display: grid;
  grid-template-columns: auto auto auto;
  
}

/* /////////////////////////////////////// */

/*//////section-one//////// */
.section-one {
  grid-column: 1/4;
  padding-top: 10%;
  line-height: 70px;
  text-align: center;
  height: 800px;
  margin-bottom: 20px;
display: flex;
justify-content: center;


}
.section-one center{

background-color: rgba(255, 255, 255, 0.588);
width: 700px;
}
.section-one div{
  
}
.section-one label {
  font-size: 25px;
}
.section-one input {
  width: 40%;
  height: 40px;
  padding-left: 10px;
  font-size: 20px;
}

.show-tabel {
  grid-column: 1/4;
  height: 700px;
  font-size: 20px;
  
  background-color: rgba(255, 255, 255, 0.684);
}

thead th{
  padding-top: 50px;
}
tbody td {
  padding-top: 20px;
  text-align: center;
}
td .image {
  width: 100px;
  height: 100px;
}

@media screen and (min-width: 425px) and (max-width: 768px) {
  .nav {
    display: block;
    position: fixed;
    background-color: black;
    top: 50px;
    right: -900px;
    height: 200px;
    line-height: 60px;
    text-align: center;
    padding-left: 50px;
    transition: all 0.5s;
    overflow: hidden;
    width: 100%;
  }

  .main-sub {
    display: block;
  }

  .check-btn {
    display: block;
    position: absolute;
    right: 25px;
    top: 15px;
  }

  #check:checked ~ .nav {
    right: 0px;
  }
}

@media screen and (max-width: 424px) {
  .nav {
    display: block;
    position: fixed;
    background-color: black;
    top: 50px;
    right: -500px;
    height: 200px;
    line-height: 60px;
    text-align: center;
    /* padding-left: 100px; */
    transition: all 0.5s;
    overflow: hidden;
    width: 100%;
  }

  .main-sub {
    display: block;
  }

  .check-btn {
    display: block;
    position: absolute;
    right: 25px;
    top: 15px;
  }

  #check:checked ~ .nav {
    right: 0px;
  }
}
        .section-one{
                background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(home.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;

        }
   </style>
</head>
<body>
    <!-- header for this page -->
    
<?php

include("header.php");


?>

    <!-- section one for this page -->

<div class="section-one">
    <div>
    <center>
 <form action="process-Add.php" method="post" enctype="multipart/form-data">
<label for="product-name">Product-Name :  </label><br> 
<input type="text" name="product-name"> <br> 
<label for="product-price">Product-price :  </label><br> 
<input type="text" name="product-price"> <br>
<label for="product-description"> Product-description  :</label><br> 
<input type="text" name="product-description"><br>
<label for="image">Product-image</label><br> 
<input type="file" name="image"> <br>
<input type="submit" value="Add Product">    
 </form>
</center>
</div>
</div>

<div class="show-tabel">

<table style="width:100%">
    <thead>
        <tr>
            <th>name</th>
            <th>price</th>
            <th>description</th>
            <th>image</th>
        </tr>
    </thead>
   
    <tbody >
        <?php

       
       if (isset($_SESSION["products"]) && !empty($_SESSION["products"])) {
            foreach ($_SESSION["products"] as $product) {
                echo"<tr>".
        "<td>".$product["name"]. "</td>".
       "<td>".$product["price"]. "</td>".
       "<td>".$product["description"]. "</td>".
       "<td>" ."<img width='100px' height='100px' class='image'. src=".$product["image"].">"."</td>".
         "</tr>";
            }
        } else {
            echo "<li>No products added yet.</li>";
        }
        ?>

        
        
       
        
    </tbody>
</table>


</div>


<?php


include("footer.php");



?>
</body>
</html>


