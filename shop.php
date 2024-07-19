<?php
include_once('include/navbar.php');
?>
<div id="content"><!-- content of shop -->
<div class="container"><!-- container of shop -->
<div class="col-md-12"><!-- first column  of shop -->
<ul class="breadcrumb">
<li> <a href="index.php">Home</a></li>
<li>Shop</li>
</ul>
</div><!-- column of shop end-->
<div class="col-md-3"> <!-- col-md-3 start -->
<?php
include('include/sidebar.php');
?>
</div> <!-- col-md-3 end -->
<div class="col-md-9"> <!-- col-md-9 start -->
<?php
if((!isset($_GET['p_cat'])) && (!isset($_GET['cat_id']))){
	echo"<div class='boxx' Style=''>
	<h1 class=''>Shop</h1>
	<p> This is mohammad fahad. This is mohammad fahad. This is mohammad fahad. This is mohammad fahad. This is mohammad fahad. This is mohammad fahad.</p>
	</div>";
	
}
?>
<div class="row"> <!-- row start -->
<?php
if((!isset($_GET['p_cat'])) && (!isset($_GET['cat_id']))){
	$per_page=2;
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	else{
		$page=1;
	}
	$start_from=($page-1)*$per_page;
	$q7="select * from products order by 1 desc limit $start_from,$per_page";
	$run7=mysqli_query($con,$q7);
	while($row7=mysqli_fetch_array($run7)){
		$pro_id=$row7['product_id'];
		$pro_img1=$row7['product_img1'];
		$pro_title=$row7['product_title'];
		$pro_price=$row7['product_price'];
		echo"
		<div class='col-md-4 col-sm-6 center-responsive'>
		<div class='product'>
		<a href='details.php?pro_id=$pro_id'>
		<img src='admin/products_image/$pro_img1' class='img-responsive' height='300px'></a>
		<div class='text'>
		<h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
		<p class='price'>INR $pro_price</p>
		<p class='buttons'>
		<a href='details.php?pro_id=$pro_id' class='btn btn-default'> View Details</a>
		<a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
          <i class='fa fa-shopping-cart'></i> Add to Cart</a>
		</p>
		</div>
		</div>
		</div>
		";
	}
	?>
</div> <!-- row end -->
<center>
<ul class="pagination">

<?php
$q8="select * from products";
$run8=mysqli_query($con,$q8);
$total_record=mysqli_num_rows($run8);
$total_pages=($total_record/$per_page);
echo"
<li class='page-item'><a href='shop.php?page=1' class='page-link'>"."First Page"."</a></li>
";
for($i=1;$i<$total_pages;$i++){
	echo"<li class='page-item'><a href='shop.php?page="."$i"."' class='page-link'>"."$i"."</a><li>";
};
echo"
<li class='page-item'><a href='shop.php?page=$total_pages' class='page-link'>"."Last Page"."</a></li>
";
}
?>
</ul>
</center>

<div class="row" style="margin-left:18px;padding:0px;">
<?php
if(isset($_GET['p_cat'])){
	$p_cat_id=$_GET['p_cat'];
	$q10="select * from product_categories where p_cat_id='$p_cat_id'";
	$run10=mysqli_query($con,$q10);
	$row10=mysqli_fetch_array($run10);
	$p_cat_title=$row10['p_cat_title'];
	$p_cat_desc=$row10['p_cat_desc'];
	echo"<div class='boxx'>
	<h3 class=''><strong>SHOP</strong>   > $p_cat_title</h3>
	<p> $p_cat_desc </p>
	</div>
	";
	
	$q9="select * from products where p_cat_id='$p_cat_id'";
	$run9=mysqli_query($con,$q9);
	while($row9=mysqli_fetch_array($run9)){
		$pro_id=$row9['product_id'];
		$pro_img1=$row9['product_img1'];
		$pro_title=$row9['product_title'];
		$pro_price=$row9['product_price'];
		echo"
		<div class='col-md-4 col-sm-6 center-responsive'>
		<div class='product'>
		<a href='details.php?pro_id=$pro_id'>
		<img src='admin/products_image/$pro_img1' class='img-responsive' height='300px'></a>
		<div class='text'>
		<h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
		<p class='price'>INR $pro_price</p>
		<p class='buttons'>
		<a href='details.php?pro_id=$pro_id' class='btn btn-default'> View Details</a>
		<a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
          <i class='fa fa-shopping-cart'></i> Add to Cart</a>
		</p>
		</div>
		</div>
		</div>
		";
	}
}
?>
</div>
<div class="row" style="margin-left:18px;padding:auto;">
<?php
if(isset($_GET['cat_id'])){
	$catid=$_GET['cat_id'];
	$q11="select * from categories where cat_id='$catid'";
	$run11=mysqli_query($con,$q11);
	$row11=mysqli_fetch_array($run11);
	$cattitle=$row11['cat_title'];
	$catdesc=$row11['cat_desc'];
	echo"
	<div class='boxx'>
	<h3><strong>SHOP</strong> > $cattitle</h3>
	<p >$catdesc</p>
	</div>
	";
	$q12="select * from products where cat_id='$catid'";
	$run12=mysqli_query($con,$q12);
	while($row12=mysqli_fetch_array($run12)){
		$proTitle=$row12['product_title'];
		$proImg1=$row12['product_img1'];
		$proPrice=$row12['product_price'];
		$pro_id=$row12['product_id'];
		
		echo"
		<div class='col-md-4 col-sm-6 center-responsive'>
		<div class='product'>
		<a href='details.php?pro_id=$pro_id'>
		<img src='admin/products_image/$proImg1' class='img-responsive' height='300px'></a>
		<div class='text'>
		<h3><a href='details.php?pro_id=$pro_id'>$proTitle</a></h3>
		<p class='price'>INR $proPrice</p>
		<p class='buttons'>
		<a href='details.php?pro_id=$pro_id' class='btn btn-default'> View Details</a>
		<a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
          <i class='fa fa-shopping-cart'></i> Add to Cart</a>
		</p>
		</div>
		</div>
		</div>
		";
	}
	
	}
?>
</div>
</div> <!-- col-md-9 end -->
</div><!-- container of shop end-->
</div><!-- content of shop end-->

<!-- Include Footer -->
<?php
include_once('include/footer.php');
?>

<!-- link all js -->
<!-- Latest compiled JavaScript -->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>