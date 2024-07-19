<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}
if(isset($_GET['user_profile'])){
	$edit_id=$_GET['user_profile'];
	$q93="select * from admin where admin_id='$edit_id'";
	$run93=mysqli_query($con,$q93);
	$row93=mysqli_fetch_array($run93);
}
?>
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Edit Admin Details</h3>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
		<input type="hidden" name="admin_id" value="<?php echo$row93['admin_id'];?>">
			<label class="col-md-3 control-label"> Name</label>
			<div class="col-md-6">
			<input type="text" name="admin_name" value="<?php echo$row93['admin_name'];?>" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Email</label>
			<div class="col-md-6">
			<input type="email" name="admin_email" value="<?php echo$row93['admin_email'];?>" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Password</label>
			<div class="col-md-6">
			<input type="text" name="admin_pass" value="<?php echo$row93['admin_pass'];?>" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Country</label>
			<div class="col-md-6">
			<input type="text" name="admin_country" value="<?php echo$row93['admin_country'];?>" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Contact</label>
			<div class="col-md-6">
			<input type="text" name="admin_contact" value="<?php echo$row93['admin_contact'];?>" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Job</label>
			<div class="col-md-6">
			<input type="text" name="admin_job" value="<?php echo$row93['admin_job'];?>" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> About</label>
			<div class="col-md-6">
			<input type="text" name="admin_about" value="<?php echo$row93['admin_about'];?>" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Image</label>
			<div class="col-md-6">
			<input type="file" name="admin_image" class="form-control" required><br>
			<img src="admin_image/<?php echo$row93['admin_image'];?>" height="80px" width="80px">
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
	$admin_id=$_POST['admin_id'];
	$admin_name=$_POST['admin_name'];
	$admin_email=$_POST['admin_email'];
	$admin_pass=$_POST['admin_pass'];
	$admin_country=$_POST['admin_country'];
	$admin_contact=$_POST['admin_contact'];
	$admin_job=$_POST['admin_job'];
	$admin_about=$_POST['admin_about'];
	$admin_image=$_FILES['admin_image']['name'];
	$admin_image_temp=$_FILES['admin_image']['tmp_name'];
	
	
	$q94="update admin set admin_name='$admin_name', admin_email='$admin_email', admin_pass='$admin_pass', admin_country='$admin_country', admin_contact='$admin_contact', admin_job='$admin_job', admin_image='$admin_image', admin_about='$admin_about' where admin_id='$admin_id'";
	$run94=mysqli_query($con,$q94);
	if($run94){
		echo"<script>alert('Admin Updated Successfully');
		location.href='index.php?view_user';
		</script>";
	}
}
?>