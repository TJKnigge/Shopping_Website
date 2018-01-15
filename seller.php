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
        <link rel =" stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel =" stylesheet" href="cart.css"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

                        <li><a href="signUp.php" ><span class="glyphicon glyphicon-user"style="padding-top: 10px"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"style="padding-top: 10px"></span> Login</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="container" style=" padding-top: 100px">
            <h2>Input new article</h2>
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
        </div>
    </body>
</html>