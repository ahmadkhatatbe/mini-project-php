<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <title>store</title>

    <style>
.header {
  grid-column: 1/4;
  display: grid;
  grid-template-columns: auto auto;
  background-color: black;
  color: white;
  justify-content: space-between;
  height: 80px;
}
.logo {
  padding-top:20px;
  padding-left: 20px;
}
#check {
  display: none;
}
.check-btn {
  display: none;
  position: absolute;
  background-color: black;
  right: 25px;
  top: 15px;
}
.nav {
}
.main-sub {
  display: flex;
  padding-top: 30px;
  padding-right: 100px;
  font-size: 20px;
}
.main-sub .sub-nav {
  list-style: none;
  padding-left: 40px;
}
.main-sub .sub-nav a {
  text-decoration: none;
  color: white;
  padding: 10px 30px;
}
.sub-nav a:hover {
  background-color: rgb(255, 255, 0);
  color: black;
  transition: 0.5s;
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



    </style>
</head>
<body>
  <div class="header">
    <div class="logo"><h1>T-shirt Online</h1></div>
     <input type="checkbox" id="check">
        <label for="check" class="check-btn">
            <img src="menu-burger.png" alt="burger-menu">
        </label>
    <div class="nav">
       
         <ul class="main-sub">
                      <li class="sub-nav"><a href="home.php">Home</a></li>
                          <li class="sub-nav"><a href="#about">AboutUs</a></li>
            <li class="sub-nav"><a href="Addproduct.php">Addproduct</a></li>
                        <li class="sub-nav"><a href="product.php">product</a></li>

                                 

        </ul>
    </div>

</div>    
</body>
</html>