


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <title>footer</title>
    <style>
.footer{
    grid-column: 1/4;
    display: grid;
    grid-template-columns: auto auto auto;
    line-height: 40px;
    background-color: black;
    justify-content: space-around;
    align-items: baseline;
    color: white;
    height:350px;
}

.nav-footer{
    display: block;
}
.nav-footer h3{
    font-size: 25px; 

}
.main-sub-footer{
    list-style: none;
   
 
}
.main-sub-footer a{
    text-decoration: none;
    color: white;
    font-size: 20px;


}
.main-sub-footer a:hover{
    color:rgb(255, 213, 0) ;

}
.contact{
    padding-right: 50px;
}
.contact input{
    width: 200px;
    height: 25px;
    border-radius: 5px;
    border: none;
}
.contact h3{
    font-size: 25px;
}
.btn-footer{
    font-weight: bold;
    border: none;
}
.btn-footer:hover{
    background:rgb(255, 213, 0);
    color: black;
   
}
@media screen and (min-width: 425px) and (max-width: 768px) {

.footer{
    grid-column: 1/4;
    display: grid;
    grid-template-columns: auto auto;
    line-height: 40px;
    background-color: black;
    justify-content: space-around;
    align-items: baseline;
    color: white;
    height:550px;
}

}
@media screen and (max-width: 424px) {

.footer{
    grid-column: 1/4;
    display: grid;
    grid-template-columns: auto;
    line-height: 40px;
    background-color: black;
    justify-content: space-around;
    align-items: baseline;
    color: white;
    height:750px;
}


  
}



    </style>
</head>
<body>  
<div class="footer">
    <h1>T-shirt Online</h1>

    <div class="links">
         <div class="nav-footer">
       <h3>links</h3>
                    <ul class="main-sub-footer">
                         <li class="sub-nav-footer"><a href="home">Home</a></li>
                          <li class="sub-nav-footer"><a href="#about">AboutUs</a></li>
                     <li class="sub-nav-footer"><a href="Addproduct.php">Addproduct</a></li>
                                 <li class="sub-nav-footer"><a href="product.php">product</a></li>

                                   

                    </ul>
            </div>
    </div>
    <div class="contact">
        <h3>Contact Us</h3>
        <label for="your Name">Name :</label>
        <input type="text" name="name" placeholder="Enter your name">
        <br>
        <label for="">Email :</label>
        <input type="email" name="email" placeholder="Enter your email"><br>
        <label for="">
Description :
        </label><br>
        <textarea name="" id="" cols="32" rows="5" style="border-radius: 5px;" placeholder=" your description"></textarea><br>
        <input type="submit" value="send" class="btn-footer">

    </div>
</div>

</body>
</html>