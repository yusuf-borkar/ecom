<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Commerce Store</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/style.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Font awesome -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div id="top"> <!-- Top Bar Start -->
        <div class="container"><!-- Container Start -->
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm">
                    <?php
                        
                        if (!isset($_SESSION['customer_email'])) {
                            # code...
                            echo "welcome guest";
                        } else{
                            echo "Welcome: " .$_SESSION['customer_email'] . "";
                        }
                    ?>
                </a>
                <a href="#"> Total Shopping Cart : $ 69, Total Items 2</a>
            </div>

            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <a href="customer_registration.php"> Register</a>
                    </li>
                    <li>
                        <a href="checkout.php"> My Account</a>
                    </li>
                    <li>
                        <a href="cart.php"> Goto Cart</a>
                    </li>
                    <li>
                        <?php
                            if (!isset($_SESSION['customer_email'])) {
                                # code...
                                echo "<a href='checkout.php'>Login</a>";
                            }else{
                                echo "<a href='logout.php'>Logout</a>";
                            }
                        ?>
                    </li>
                </ul>
            </div>
        </div><!-- Container End -->
    </div><!-- Top Bar End -->
    <div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default Start -->
        <div class="container">
            <div class="navbar-header"><!-- navbar-header Start -->
                <a class="navbar-brand home" href="index.php">
                    <img src="images/rsz_1rsz_logo-small.png" alt="Batman Logo" class="hidden-xs">
                    <img src="images/rsz_1rsz_logo-small.png" alt="Batman-small Logo" class="visible-xs">
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span> 
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only"></span> 
                    <i class="fa fa-search"></i>
                </button>
            </div><!-- navbar-header End -->
            <div class="navbar-collapse collapse" id="navigation"> <!-- navbar-collapse collapse Start -->
                <div class="padding-nav"> <!-- padding-nav Start -->
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping cart</a>
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li>
                            <a href="services.php">Services</a>
                        </li>
                        <li>
                            <a href="contactus.php">Contact Us</a>
                        </li>
                    </ul>
                </div><!-- padding-nav End -->
                <a href="cart.php" class="btn btn-primary navbar-btn right">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 items in cart</span>
                </a>
                <div class="navbar-collapse collapse right"> <!--navbar-collapse collapse right Start -->
                    <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div> <!--navbar-collapse collapse-right End -->
                <div class="collapse clearfix" id="search">
                    <form class="navbar-form" method="get" action="result.php">
                        <div class="input-group">
                            <input type="text" name="user_query" placeholder="Search" class="form-control" required="">
                            <span class="input-group-btn">
                            <button type="submit" value="Search" name="Search" class="btn btn-primary">
                                <i class="fa fa-search"></i>
                            </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div><!-- navbar-collapse collapse End -->
        </div>
    </div><!-- navbar navbar-default End -->

    <div id="content">
        <div class="container"><!-- container Start-->
            <div class="col-md-12"><!-- col-md-12 Start-->
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Registration</li>
                </ul>
            </div><!-- col-md-12 End-->
            <div class="col-md-3">
                <?php
                    include("includes/sidebar.php")
                ?>
            </div>
            <div class="col-md-9"><!--col-md-9 End-->
                <div class="box"><!--box Start-->
                    <div class="box-header"><!--box-header Start-->
                        <center>
                            <h2>Customer Registration</h2>
                        </center>
                    </div><!--box-header End-->
                    <form action="customer_registration.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Customer Name</label>
                            <input type="text" name="c_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Customer Email</label>
                            <input type="text" name="c_email" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Customer Password</label>
                            <input type="password" name="c_password" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" name="c_country" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="c_city" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" name="c_contact" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="c_address" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="c_image" class="form-control" required="">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary">
                                <i class="fa fa-user-md"></i>Register
                            </button>
                        </div>
                    </form>
                </div><!--box End-->
            </div><!--col-md-9 Start-->

        </div><!-- container End-->
    </div><!--content End-->
<!--Footer Start-->
<?php
    include("includes/footer.php")
?>
    <!--Footer End-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    # code...
    $c_name=$_POST['c_name'];
    $c_email=$_POST['c_email'];
    $c_password=$_POST['c_password'];
    $c_country=$_POST['c_country'];
    $c_city=$_POST['c_city'];
    $c_contact=$_POST['c_contact'];
    $c_address=$_POST['c_address'];
    $c_image=$_FILES['c_image']['name'];
    $c_tmp_image=$_FILES['c_image']['tmp_name'];
    $c_ip=getUserIP();
    
    move_uploaded_file($c_tmp_image,"customer/customer_images/$c_image");
    $insert_customer="insert into customers(customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip)
     values('$c_name','$c_email','$c_password','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";

    $run_customer=mysqli_query($con,$insert_customer);
    $sel_cart="select * from cart where ip_add='$c_ip'";
    $run_cart=mysqli_query($con,$sel_cart);
    $check_cart=mysqli_num_rows($run_cart);

    if ($check_cart>0) {
        # code...
        $_SESSION['customer_email']=$c_email;
        echo "<script>alert('You have been registered successfully')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
    }else {
        # code...
        $_SESSION['customer_email']=$c_email;
        echo "<script>alert('You have been registered successfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}
?>