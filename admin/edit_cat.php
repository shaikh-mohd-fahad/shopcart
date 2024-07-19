<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}
if(isset($_GET['edit_cat'])){
	$edit_id=$_GET['edit_cat'];
	$q75="select * from categories where cat_id='$edit_id'";
	$run75=mysqli_query($con,$q75);
	$row75=mysqli_fetch_array($run75);
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
		<input type="hidden" name="cat_id" value="<?php echo$row75['cat_id'];?>" class="form-control" required>
		<div class="form-group">
			<label class="col-md-3 control-label"> Product Category Title</label>
			<div class="col-md-6">
			<input type="text" name="cat_title" value="<?php echo$row75['cat_title'];?>" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Product Category Description</label>
			<div class="col-md-6">
			<textarea type="text" name="cat_desc" rows="5" class="form-control"><?php echo$row75['cat_desc'];?></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"></label>
			<div class="col-md-6">
			<input type="submit" name="update" class="btn btn-primary" value="Update Category">
			</div>
		</div>
		</form>
	</div>
</div>
</div>
</div>
<?php
if(isset($_POST['update'])){
	$cat_title=$_POST['cat_title'];
	$cat_desc=$_POST['cat_desc'];
	$cat_id=$_POST['cat_id'];
	
	$q76="update categories set cat_title='$cat_title', cat_desc='$cat_desc' where cat_id='$cat_id'";
	$run76=mysqli_query($con,$q76);
	if($run76){
		echo"<script>alert('Category Updated Successfully');
		location.href='index.php?view_categories';
		</script>";
	}
}
?>