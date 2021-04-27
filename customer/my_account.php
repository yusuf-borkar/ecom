<?php
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
                    Welcome Guest
                </a>
                <a href="#"> Total Shopping Cart : $ 69, Total Items 2</a>
            </div>

            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <a href="../customer_registration.php"> Register</a>
                    </li>
                    <li>
                        <a href="my_account.php"> My Account</a>
                    </li>
                    <li>
                        <a href="../cart.php"> Goto Cart</a>
                    </li>
                    <li>
                        <a href="../login.php"> Login</a>
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
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a href="../shop.php">Shop</a>
                        </li>
                        <li  class="active">
                            <a href="my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="../cart.php">Shopping cart</a>
                        </li>
                        <li>
                            <a href="../about.php">About Us</a>
                        </li>
                        <li>
                            <a href="../services.php">Services</a>
                        </li>
                        <li>
                            <a href="../contactus.php">Contact Us</a>
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
                    <li>My Account</li>
                </ul>
            </div><!-- col-md-12 End-->
            <div class="col-md-3">
                <?php
                    include("includes/sidebar.php")
                ?>
            </div>
            <div class="col-md-9">
                <!--Including my_order.php Start-->
                <?php
                    if (isset($_GET['my_order'])) {
                        include("my_order.php");
                    }
                ?>
                <!--Including my_order.php End-->
                <!--Including Payoffline.php Start-->
                <?php
                    if (isset($_GET['pay_offline'])) {
                        # code...
                        include("payoffline.php");
                    }
                ?>
                <!--Including Payoffline.php End-->
                <!--Including Edit Account Start-->
                <?php
                    if (isset($_GET['edit_act'])) {
                        # code...
                        include("edit_acc.php");
                    }
                ?>
                <!--Including Edit Account End-->
                <!--Including Change Password Start-->
                <?php
                    if (isset($_GET['change_pass'])) {
                        # code...;
                        include("change_password.php");
                    }
                ?>
                <!--Including Change Password End-->
                <!--Including Delete Password Start-->
                <?php
                    if (isset($_GET['delete_ac'])) {
                        # code...
                        include("delete_ac.php");
                    }
                ?>
                <!--Including Delete Password End-->
            </div>
        </div><!-- container End-->
    </div>

<!--Footer Start-->
<?php
    include("includes/footer.php")
?>
    <!--Footer End-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>