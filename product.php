
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/product.css">
    <title>cards</title>
    <style>
      *{
    padding: 0;
    margin: 0;
}
body{
    display: grid;
    grid-template-columns: auto auto auto;
 
}
.cards-container{
    grid-column: 1/4;
    display:flex;
    flex-wrap: wrap;
    margin: 20px;
    height: 1100px; 
      overflow: hidden;

}
.card{ 
    margin-top: 20px;
    margin-left: 20px;
    background-color: rgb(255, 255, 255);
    width: 200px;
    height: 400px;
    text-align: center;
    border-radius: 10px;
    font-size: 20px;
    box-shadow: -5px 5px  20px rgba(0, 0, 0, 0.248);
        transition: 0.8s;

}

.card:hover{
    scale: 1.08;
    transition: 0.8s;
    box-shadow: 0 0 -5px  rgba(0, 0, 0, 0.248);
}
.card-content{
    line-height: 50px;
}
.card .imag-card{
   
    width: 100px;
    height: 100px;
}
.price{
    font-weight:bold ;
    float: left;
    padding-left: 45px;
}
.brand{
    padding-top: 100px;
}
.description{
    font-size: 15px;
}
.button{
    padding-top:55px ;
}
.button button{
    width: 100%;
    height: 35px;
    border-radius: 10px;
    font-weight: bold;
    border: none;
    
}
.button button:hover{
    background-color: rgb(255, 213, 0);
    transition: 0.5s;
}

    </style>
</head>
<body>
  <?php
  include("header.php")
  ?> 
  
<div class="cards-container">
    <?php
 if (isset($_SESSION["products"]) && !empty($_SESSION["products"])) {
            foreach ($_SESSION["products"] as $product) {
 echo "<div class='card'>".
    "<div class='imag-card'>".
      "<img width='200px' height='200px' class='image'. src=".$product["image"].">".
     " </div>".
     "  <div class='card-content'>".
  "  <div class='brand'>".
     "<p>Brand :".$product["name"]."</p>".
     " </div>".
      "<div class='description'>".
    "<p>" . $product["description"]."</p>".
   "  </div>".
     " <div class='price'>".
     " <p> price :$ ".$product["price"]."</p>".
   " </div>".
  " <div class='button'>".
     " <button> BuyNow </button>".
   " </div>".
   "  </div>".
    "</div>";
           }}
           
           ?>
</div>    

 <?php
  include("footer.php")
  ?> 
</body>
</html>