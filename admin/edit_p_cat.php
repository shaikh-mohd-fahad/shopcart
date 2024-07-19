<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}
if(isset($_GET['edit_p_cat'])){
	$edit_id=$_GET['edit_p_cat'];
	$q70="select * from product_categories where p_cat_id='$edit_id'";
	$run70=mysqli_query($con,$q70);
	$row70=mysqli_fetch_array($run70);
}
?>
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Edit Products Category</h3>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="p_cat_id" value="<?php echo$row70['p_cat_id'];?>" class="form-control" required>
		<div class="form-group">
			<label class="col-md-3 control-label"> Product Category Title</label>
			<div class="col-md-6">
			<input type="text" name="p_cat_title" value="<?php echo$row70['p_cat_title'];?>" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Product Category Description</label>
			<div class="col-md-6">
			<textarea type="text" name="p_cat_desc" rows="5" class="form-control"><?php echo$row70['p_cat_desc'];?></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"></label>
			<div class="col-md-6">
			<input type="submit" name="update" class="btn btn-primary" value="Update Product Category">
			</div>
		</div>
		</form>
	</div>
</div>
</div>
</div>
<?php
if(isset($_POST['update'])){
	$p_cat_title=$_POST['p_cat_title'];
	$p_cat_desc=$_POST['p_cat_desc'];
	$p_cat_id=$_POST['p_cat_id'];
	
	
	$q71="update product_categories set p_cat_title='$p_cat_title', p_cat_desc='$p_cat_desc' where p_cat_id='$p_cat_id'";
	$run71=mysqli_query($con,$q71);
	if($run71){
		echo"<script>alert('Product Updated Successfully');
		location.href='index.php?view_product_cat';
		</script>";
	}
}
?>