<!DOCTYPE html>
<?php
include 'General.php';
$conn = connectionDB();


if (isset($_SESSION['name']) &&
        isset($_SESSION['image']) &&
        isset($_SESSION['price'])) {
    $name = get_post($conn, 'name');
    $image = get_post($conn, 'image');
    $price = get_post($conn, 'price');




    $query = "INSERT INTO products
            (name,image,price)
            VALUES ('$name','$image','$price')";
    $result = $conn->query($query);

    if (!$result)
        echo "INSERT failed: $query<br>" .
        $conn->error . "<br><br>";
}
?>
<html>
    <head>
        <title> Simple_Shopping_cart</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel =" stylesheet" href="cart.css"/>
        <link rel =" stylesheet" href="footer.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="menu">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="mainpage.php" class="navbar-brand" title="PHP Computer store Home " style="padding-top: 12px ;font-family: Georgia ">PHP Developers Store</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right"> 
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"style="padding-top: 10px"></span> Logout</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="container" style=" padding-top: 100px ; background-color: lightgray;">
            <center>
             <h1 style="  font-family: Georgia ">Input new Item informations </h1>
             
            <form class="form-horizontal" action="seller.php"  method="post">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Discription:</label>
                    <div class="col-sm-10">          
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="img">Image:</label>
                    <div class="col-sm-10">          
                        <input type="file" class="form-control" placeholder="Img" name="image">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="price">Price:</label>
                    <div class="col-sm-10">          
                        <input type="text" class="form-control" placeholder="Price" name="price">
                    </div>
                </div>
                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
             </center>
        </div>
        <div class="content">
        </div>
        <footer id="myFooter">
            <div class="container">
                <ul>
                    <li><a href="index.php">PHP Developer Store</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Our Products</a></li>
                    <li><a href="#">Terms of service</a></li>
                </ul>
                <p class="footer-copyright">© 2018 Copyright is Reserved For PHP Developer Team </p>
            </div>
            <div class="footer-social">
                <a href="#" class="social-icons"><i class="fa fa-facebook"></i></a>
                <a href="#" class="social-icons"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="social-icons"><i class="fa fa-twitter"></i></a>
            </div>
        </footer>
    </body>
</html>