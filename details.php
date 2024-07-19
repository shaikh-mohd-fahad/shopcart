<?php
include_once('include/conn.php');
if(isset($_GET['pro_id'])){
	$pro_id=$_GET['pro_id'];
	$q14="select * from products where product_id='$pro_id'";
	$run14=mysqli_query($con,$q14);
	$row14=mysqli_fetch_array($run14);
	$pro_title=$row14['product_title'];
	$img1=$row14['product_img1'];
	$img2=$row14['product_img2'];
	$img3=$row14['product_img3'];
	$pro_price=$row14['product_price'];
	$pro_desc=$row14['product_desc'];
	$pro_cat_id=$row14['p_cat_id'];
	$q15="select * from product_categories where p_cat_id='$pro_cat_id'";
	$run15=mysqli_query($con,$q15);
	$row15=mysqli_fetch_array($run15);
	$p_cat_title=$row15['p_cat_title'];
}
?>
<?php
include('include/navbar.php');
?>
<div id="content"><!-- content of detail -->
<div class="container" id="productmain"><!-- container of detail -->
<div class="row"><!-- first row start -->
<div class="col-md-12"><!-- first column  of detail -->
<ul class="breadcrumb">
<li> <a href="index.php">Home</a></li>
<li> <a href="shop.php">Shop</a></li>
<li class="text-capitalize"> <a href="shop.php?p_cat=<?php echo $pro_cat_id; ?>"> <?php echo $p_cat_title; ?> </a></li>
<li> <?php echo $pro_title; ?></li>
</ul>
</div><!-- column of detail end-->
</div><!-- first row ended -->
<div class="row"> <!-- second row start -->
<div class="col-md-3"> <!-- second col-md-3 start -->
<?php
include('include/sidebar.php');
?>
</div> <!-- col-md-3 end -->
<div class="col-md-9"> <!-- second col-md-9 start -->
<div class="row"> <!-- row start -->
<div class="col-sm-6"><!-- col-sm-6 of second row start -->
<div id="mainimage" class="text-center" style="text-align:center">
<img src="admin/products_image/<?php echo$img1; ?>" style="" class="img-responsive ">
</div>
</div><!-- col-sm-6 of second row end -->
<div class="col-sm-6"> <!-- col-sm-6 of second row start -->
<div class="boxx" style="margin-bottom:20px"><!-- boxx start -->
<h1 class="text-center"><?php echo$pro_title; ?></h1>
<?php
include_once('function/functions.php');
addCart();
?>
<form action="details.php?add_cart=<?php echo $pro_id;?>" method="post" class="form-horizontal"> <!-- form start -->
<div class="form-group"> <!-- first form group start -->
<label class="control-label col-sm-5">Product Quantity</label>
<div class="col-sm-7">
<select class="form-control" name="product_quantity">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</div>
</div> <!-- first form group end-->

<div class="form-group"> <!-- second form group start -->
<label class="control-label col-sm-5">Product Size</label>
<div class="col-sm-7">
<select class="form-control" name="product_size">
<option>Select Size</option>
<option>Small</option>
<option>Medium</option>
<option>Large</option>
<option>Extra Small</option>
</select>
</div>
</div> <!-- second form group end-->
<p class="price">INR <?php echo$pro_price; ?></p>
<p class="text-center buttons">
<button type="submit" class="btn btn-primary">
<i class="fa fa-shopping-cart"> </i> Add to Cart
</button>
</p>
</form> <!-- form end -->
</div><!-- boxx end -->

<div class="col-xs-4">
<a href="#" class="thumb">
<img src="admin/products_image/<?php echo$img2; ?>" class="img-responsive">
</a>
</div>
<?php 
if($img3!=''){
?>
<div class="col-xs-4">
<a href="#" class="thumb">
<img src="admin/products_image/<?php echo$img3; ?>" class="img-responsive">
</a>
</div>
<?php
}
if($img1!=''){
?>
<div class="col-xs-4">
<a href="#" class="thumb">
<img src="admin/products_image/<?php echo$img1; ?>" class="img-responsive">
</a>
</div>
<?php
}
?>
</div><!-- col-sm-6 of second row end -->
</div> <!-- row end -->
</div> <!-- col-md-9 end -->
</div><!-- second row ended -->

<div class="mt-5 mb-5 boxx" id="details">
<h4> Product Details</h4>
<p><?php echo$pro_desc;?></p>
<h4> Size</h4>
<ul>
<li>Small</li>
<li>Medium</li>
<li>Large</li>
<li>Extra Large</li>
</ul>
</div>

<div class="row same-height-row" style="margin:20px"> <!-- row start -->
<div class="col-md-3 col-sm-6"> <!-- column start -->
<div class="boxx same-height headline">
<h4 class="">You may also like these products</h4>
</div>
</div> <!-- column end -->
<?php
$q16="select * from products order by 1 limit 0,3";
$run16=mysqli_query($con,$q16);
while($row16=mysqli_fetch_array($run16)){
	$pro_id=$row16['product_id'];
	$product_title=$row16['product_title'];
	$product_price=$row16['product_price'];
	$product_img1=$row16['product_img1'];
	echo"
	<div class='center-responsive col-md-3 col-sm-6'>
	<div class='product same-height'>
	<a href='details.php?pro_id=$pro_id'>
	<img src='admin/products_image/$product_img1' class='img-responsive'> 
	</a>
	<div class='text'>
		<h3><a href='details.php?pro_id=$pro_id'>$product_title</a></h3>
		<p class='price' style='font-size:18px;margin-top:0;'>INR $product_price</p>
	</div>
	</div>
	</div>
	";
	
}
?>
</div> <!-- row end -->

</div><!-- container of detail end -->
</div><!-- content of detail end -->
<?php
include('include/footer.php');
?>
<!-- link all js -->
<!-- Latest compiled JavaScript -->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>