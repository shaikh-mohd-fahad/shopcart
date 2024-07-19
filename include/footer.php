<div id="footer"><!-- footer start-->
<div class="container"><!-- container start-->
<div class="row"><!-- row start-->
<div class="col-md-3 col-sm-6"><!-- column start-->
<h4> Pages</h4>
<ul>
<li><a href="cart.php">Shopping Cart</a></li>
<li><a href="">Contact Us </a></li>
<li><a href="">Shop </a></li>
<li><a href="">My Account</a></li>
</ul>
<hr>
<h4>User Section</h4>
<ul>
<li><a href="">Log in</a></li>
<li> <a href=""> Register</a></li> 
</ul>
<hr class="hidden-md hidden-lg">
</div><!-- column end-->

<div class="col-md-3 col-sm-6"><!-- 2nd column start-->
<h4> Top Product Categories</h4>
<ul>
<?php
include_once('include/conn.php');
$q4="select * from product_categories";
$run4=mysqli_query($con,$q4);
while($row4=mysqli_fetch_array($run4)){
	$p_cat_id=$row4['p_cat_id'];
	$p_cat_title=$row4['p_cat_title'];
	echo"<li><a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a></li>";
}
?>
</ul>
<hr class="hidden-md hidden-lg">
</div><!-- column end -->

<div class="col-md-3 col-sm-6"><!-- 3rd column start-->
<h4>where to find us</h4>
<p>
<strong><a href="">abc.com</a></strong>
<br>Nyay Vihar,
<br>Bhitoli,
<br>Sitapur Road,
<br>Lucknow.
<br>abcxyz@gmail.com
<br>9534567899
</p>
<a href="contactus">Go to contact page</a>
<hr class="hidden-lg hidden-md">
</div><!-- column end -->

<div class="col-md-3 col-sm-6"><!-- 4th column start -->
<h4> Get the News</h4>
<p class="text-muted">
Subscribe us to get the updates about the exciting offers.
</p>
<form action="" method="post">
<div  class="input-group">
<input type="text" placeholder="Email" name="email" class="form-control">
<span class="input-group-btn"><input type="submit" value="Subscribe" class="btn btn-default"></span>
</div>
</form>
<hr>
<h4 class="">Stay in Touch</h4>
<p class="social">
<a href=""><i class="fab fa-facebook"></i></a>
<a href=""><i class="fab fa-twitter"></i></a>
<a href=""><i class="fab fa-instagram"></i></a>
<a href=""><i class="fab fa-google-plus"></i></a>
<a href=""><i class="fa fa-envelope"></i></a>
</p>
</div><!-- column end -->
</div><!-- row end-->
</div><!-- container end-->
</div><!-- footer end-->
<div id="copyright"><!-- copyright start -->
<div class="container">
<div class="col-md-6"> 
<p class="pull-left">
&copy; 2019 Mohd Fahad.
</p>
</div>
<div class="col-md-6">
<p class="pull-right">
Template By: <a href="index.php">medstore.com</a>
</p>
</div>
</div>
</div><!-- copyright end-->