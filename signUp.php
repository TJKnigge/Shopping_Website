<?php
//session_start();


?>
<html>
    <head>
        <title> Simple_Shopping_cart</title>
        <link rel =" stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel =" stylesheet" href="cart.css"/>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel =" stylesheet" href="Footer.css"/> 
        

    </head>
    <body>
        <div class="menu">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand" title="PHP Computer store Home " style="padding-top: 12px ;font-family: Georgia ">PHP Developers Store</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="#"><span class="glyphicon glyphicon-log-in"style="padding-top: 10px"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="menu">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand" title="PHP Computer store Home " style="padding-top: 12px ;font-family: Georgia ">PHP Developers Store</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"style="padding-top: 10px"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 150px">
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <h2>Sign Up</h2>
                            </div>
                            <div class="form-group">
                                <strong>Name</strong>
                                <input id="name" name="name" type="myname" maxlength="50" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Surname</strong>
                                <input id="surname" name="surname" type="sname" maxlength="50" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Street Name</strong>
                                <input id="streetname" name="streetname" type="strname" maxlength="50" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>House Number</strong>
                                <input id="housenumber" name="housenumber" type="hnumber" maxlength="50" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Zipcode</strong>
                                <input id="zipcode" name="zipcode" type="zip" maxlength="50" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>City</strong>
                                <input id="city" name="city" type="cty" maxlength="50" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Email Adrress</strong>
                                <input id="emailadress" name="email" type="email" maxlength="50" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Password</strong>
                                <input id="password" name="password"t ype="password" maxlength="50" class="form-control">
                            </div>
                            <div class="form-group" style="padding-top: 12px;">
                                <button id="submit" type="submit" class="btn btn-success btn-block">Sign up</button>
                            </div>

                            <p class="form-group">By signing in you are agreeing to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p>
                        </form>
                    </div>
                </div>
            </div>

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

<?php

     if (isset($_REQUEST) && !empty($_REQUEST)){
         
         $name= $_REQUEST['name'];
         $password= $_REQUEST['password'];
         $surname= $_REQUEST['surname'];
         $streetname= $_REQUEST['streetname'];
         $housenumber= $_REQUEST['housenumber'];
         $zipcode= $_REQUEST['zipcode'];
         $city= $_REQUEST['cty'];
         $emailadress= $_REQUEST['email'];
         
          
         $sql= "INSERT INTO `cart_users` (`name`, `password`, `surname`, `streetname`, `housenumber`, `zipcode`, `city`, `emailadress`) VALUES ('$name', '$password', '$surname', '$streetname', '$housenumber', "
                 . "'$zipcode', '$city', '$emailadress')";
echo $sqli;                         
         $result= mysqli_query($conn, $sql)
                    or die("Failed to connect to DB" . mysqli_error());
         
         if($result){
             
             echo "Bedankt voor het invullen van uw gegevens " . $name;
         }else{
             echo "Sorry, probeer het nog eens";
         }
     }
?>