<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}
?>
<div class="row"> <!-- row start -->
<div class="col-md-12"> <!-- col-md-12 start -->

<ul class="breadcrumb">
<li class="active"><i class="fas fa-dashboard"></i> Dashboard / Insert Product</li>
</ul>
</div> <!-- col-md-12 end -->
</div> <!-- row end -->

<div class="container">
<div class="row"> <!-- row start -->
<div class="col-md-9"> <!-- col-md-9 start -->
<div class="panel panel-default" style="padding:25px"> <!-- panel start -->
<div class="panel-heading"> <!-- panel heading start -->
<h3 class="panel-title text-center font-weight-bold"><i class="fa a-money fa-w"></i> Insert Product</h3>
</div> <!-- panel heading end -->
<div class="panel-body"> <!-- panel-body start -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<div class="form-group">
<label> Product Title</label>
<input type="text" name="product_title" class="form-control"  >
</div>

<div class="form-group">
<label> Product Category</label>
<select class="form-control" name="p_cat_id">
<option>Select Product Category</option>
<?php 
include('include/conn.php');
$q1="select * from product_categories";
$run1=mysqli_query($con,$q1);
while($row1=mysqli_fetch_array($run1)){
	$p_c_title=$row1['p_cat_title'];
	$p_c_id=$row1['p_cat_id'];
	echo"<option value='$p_c_id'> $p_c_title </option>";
}


?>
</select>
</div>

<div class="form-group">
<label> Category</label>
<select class="form-control" name="cat_id">
<option>Select Category</option>
<?php 
$q2="select * from categories";
$run2=mysqli_query($con,$q2);
while($row2=mysqli_fetch_array($run2)){
	$c_title=$row2['cat_title'];
	$c_id=$row2['cat_id'];
	echo"<option value='$c_id'> $c_title </option>";
}
?>
</select>
</div>


<div class="form-group">
<label> Product Image 1</label>
<input type="file" name="product_img1" class="form-control"  >
</div>


<div class="form-group">
<label> Product Image 2</label>
<input type="file" name="product_img2" class="form-control"  >
</div>


<div class="form-group">
<label> Product Image 3</label>
<input type="file" name="product_img3" class="form-control"  >
</div>

<div class="form-group">
<label> Product Price</label>
<input type="text" name="product_price" class="form-control"  >
</div>

<div class="form-group">
<label> Product Keyword</label>
<input type="text" name="product_keyword" class="form-control"  >
</div>

<div class="form-group">
<label> Product Description</label>
<textarea class="form-control" name="product_desc"></textarea>
</div>
<div class="form-group">
<input type="submit" name="sb1" value="Submit" class="btn btn-success btn-block">
</div>
</form>

</div> <!-- panel-body end -->
</div> <!-- panel end -->
</div> <!-- col-md-9 end -->
</div> <!-- row end -->

</div>
<?php
if(isset($_POST['sb1'])){
	$product_title=$_POST['product_title'];
	$p_cat_id=$_POST['p_cat_id'];
	$cat_id=$_POST['cat_id'];
	$product_price=$_POST['product_price'];
	$product_keyword=$_POST['product_keyword'];
	$product_desc=$_POST['product_desc'];
	
	
	$img1=$_FILES['product_img1']['tmp_name'];
	$img2=$_FILES['product_img2']['tmp_name'];
	$img3=$_FILES['product_img3']['tmp_name'];
	
	$product_img1=$_FILES['product_img1']['name'];
	$product_img2=$_FILES['product_img2']['name'];
	$product_img3=$_FILES['product_img3']['name'];
	
	$q3="insert into products(p_cat_id, cat_id, product_title, product_img1, product_img2, product_img3, product_price, product_desc, product_keyword) values('$p_cat_id', '$cat_id', '$product_title', '$product_img1', '$product_img2', '$product_img3', '$product_price', '$product_desc', '$product_keyword')";
	$run3=mysqli_query($con,$q3);
if($run3){
	move_uploaded_file($img1,"products_image/$product_img1");
	move_uploaded_file($img2,"products_image/$product_img2");
	move_uploaded_file($img3,"products_image/$product_img3");
	echo"<script> alert('product is added')</script>";
}
else{
	echo"product is not added";
}
}
?>