<!doctype html>
<?php
session_start();
include_once('include/conn.php');
include_once('function/functions.php');
?>
<html lang="en">
<head>
<title>Ecommerce</title>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width;initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap3.css">

<!-- link font awesome -->
<link href="css/all.min.css" rel="stylesheet">

<!-- custome style link -->
<link href="css/style.css" rel="stylesheet">

</head>
<body style="background-color:white">
<div class="" id="top"><!-- Top Start -->
<div class="container">
<div class="row"><!-- top row start -->
<div class="col-md-6 offer"><!-- first column of top start -->
<a href="#" class="btn btn-success">Welcome <?php if(isset($_SESSION['username'])){echo$_SESSION['username'];}else{echo"Guest";}?></a>
<a href="#">Shopping Cart total price: INR <?php totalprice(); ?> , Total item: <?php item();?></a> 
</div><!-- first column of top end -->

<div
 class="col-md-6"><!-- Second column of top start -->
<ul class="menu">
<li> 
<?php if(isset($_SESSION['email'])){
echo"Registered";
}else{
echo"<a href='customer_registration.php'> Register </a>";	
}

?> </li>
<li> <a href="myaccount.php?my_order"> My Account </a> </li>
<li> <a href="cart.php"> Goto Cart </a> </li>
<li> 
<?php if(isset($_SESSION['email'])){
	echo"<a href='logout.php'>Logout</a>";
}else{
	echo"<a href='login.php'>Login</a>";
}	?> </li>
</ul>
</div><!-- second column of top end -->
</div><!-- top row end -->
</div>
</div><!-- top ended -->

<div class="navbar navbar-default" id="navbar"><!-- navbar started -->
<div class="container">
<div class="navbar-header"><!-- navbar header started -->
<a href="index.php" class="navbar-brand home">Shopper.com</a>
<button class="navbar-toggle" data-target="#nclp" data-toggle="collapse"><span class="sr-only">Toggle Navigation</span> <i class="fa fa-align-justify"></i> </button>

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
<span class="sr-only"></span>
<i class="fa fa-search"></i></button>
</div><!-- navbar header ended -->
<div class="collapse navbar-collapse " id="nclp"><!-- navbar collapse --> 
<div class="padding-nav"><!-- padding nav start -->
<ul class="navbar-nav nav navbar-left">
<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
<li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
<li class="nav-item"><a href="myaccount.php?my_order" class="nav-link">My Account</a></li>
<li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
<li class="nav-item"><a href="aboutus.php" class="nav-link">About us</a></li>
<li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
<li class="nav-item"><a href="contactus.php" class="nav-link">Contact us</a></li>
</ul>
</div><!-- padding nav end-->
<a href="cart.php" class="btn btn-primary right navbar-btn">
<i class="fa fa-shopping-cart"></i>
<span> <?php item();?> items in cart.</span>
</a>
<div class="navbar-collapse collapse  right"><!--right collapse started-->
<button type="button" class="btn btn-primary navbar-btn" data-toggle="collapse" data-target="#search">
<span class="sr-only">Toggle Search</span>
<i class="fa fa-search"></i>
</button>
</div><!--right collapse ended-->
<div class="collapse clearfix" id="search"><!-- Search form started-->
<form class="navbar-form" method="post" action="search.php">
<div class="input-form">
<input type="search" placeholder="Search" name="user_query" class="form-control">
<span class="input-group-btn"><button type="submit" name="sb1" class="btn btn-primary"><i class="fa fa-search"></i></button></span>
</div>
</form>
</div><!-- search form ended-->
</div><!-- navbar collapse ended -->
</div>
</div><!-- navbar ended -->