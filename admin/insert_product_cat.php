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
<li class="active"><i class="fas fa-dashboard"></i> Dashboard / Insert Product category</li>
</ul>
</div> <!-- col-md-12 end -->
</div> <!-- row end -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Insert Product category</h3>
	</div>
	<div class="panel-body">
	<form class="form-horizontal" action="" method="post">
		<div class="form-group">
			<label class="col-md-3 control-label"> Product Category Title</label>
			<div class="col-md-6">
			<input type="text" name="p_cat_title"class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Product Category Description</label>
			<div class="col-md-6">
			<textarea type="text" name="p_cat_desc"class="form-control" ></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"></label>
			<div class="col-md-6">
			<input type="submit" name="submit" class="btn btn-primary" >
			</div>
		</div>
	</form>
	</div>
</div>
</div>
</div>
<?php
if(isset($_POST['submit'])){
	$p_cat_title=$_POST['p_cat_title'];
	$p_cat_desc=$_POST['p_cat_desc'];
	$q67="insert into product_categories(p_cat_title, p_cat_desc) values('$p_cat_title', '$p_cat_desc')";
	$run67=mysqli_query($con,$q67);
	if($run67){
		echo"<script> alert('Product Category Submited');
		location.href='index.php?insert_product_cat';
		</script>
		";
	}
}
?>