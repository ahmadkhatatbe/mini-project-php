
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
.one{
background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(home1.jpg);
background-size: cover;
background-repeat: no-repeat;
background-position: center;
height: 600px;
line-height: 50px;
text-align: center;

}
.one p{
padding-top: 15%;
color: white;
font-size: 30px;
}
.one p span{
    font-size: 50px;
    
}
.aboutus h2{
padding-top: 20px;
text-align: center;
font-size: 35px;
}
.aboutus{
    height: 700px;
    position: relative;
}
.aboutus p{
    position: absolute;
    top: 30%;
    left: 10%;
    width: 700px;
    font-size: 35px;
}
.aboutus img{
   position: absolute;
   top:100px;
   right: 50px;
}

    </style>
</head>
<body>
    <?php
include("header.php");
?>

<section class="one">
<p> <span>Welcome</span><br> to T-shirt online Where you find What you Love</p>
</section>


<section class="aboutus" id="about">
    <h2>AboutUs</h2>
<p>Highlight how your T-shirt store caters to your 
    customers' needs and preferences. Express your commitment to
     providing excellent customer service and </p>
<img src="about us.jpg" alt="" srcset="" width="400px"height="400px">
</section>


<?php
include("footer.php");
?>
</body>
</html>