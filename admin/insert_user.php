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
<li class="active"><i class="fas fa-dashboard"></i> Dashboard / Insert Admin</li>
</ul>
</div> <!-- col-md-12 end -->
</div> <!-- row end -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Insert Admin</h3>
	</div>
	<div class="panel-body">
	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label class="col-md-3 control-label">  Name</label>
			<div class="col-md-6">
			<input type="text" name="admin_name"class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">  Email</label>
			<div class="col-md-6">
			<input type="email" name="admin_email"class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">  Password</label>
			<div class="col-md-6">
			<input type="password" name="admin_pass"class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">  Contact</label>
			<div class="col-md-6">
			<input type="text" name="admin_contact"class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">  Country</label>
			<div class="col-md-6">
			<input type="text" name="admin_country"class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">  Job</label>
			<div class="col-md-6">
			<input type="text" name="admin_job"class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">  About</label>
			<div class="col-md-6">
			<input type="text" name="admin_about"class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">  Image</label>
			<div class="col-md-6">
			<input type="file" name="admin_image"class="form-control" required>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-3 control-label"></label>
			<div class="col-md-6">
			<input type="submit" value="Add Admin" name="submit" class="btn btn-primary" >
			</div>
		</div>
	</form>
	</div>
</div>
</div>
</div>
<?php
if(isset($_POST['submit'])){
	$admin_name=$_POST['admin_name'];
	$admin_email=$_POST['admin_email'];
	$admin_pass=$_POST['admin_pass'];
	$admin_contact=$_POST['admin_contact'];
	$admin_country=$_POST['admin_country'];
	$admin_job=$_POST['admin_job'];
	$admin_about=$_POST['admin_about'];
	$admin_image=$_FILES['admin_image']['name'];
	$admin_image_temp=$_FILES['admin_image']['tmp_name'];
	$q90="insert into admin(admin_name, admin_email, admin_pass, admin_contact, admin_country, admin_job, admin_about, admin_image) values('$admin_name', '$admin_email', '$admin_pass', '$admin_contact', '$admin_country', '$admin_job', '$admin_about', '$admin_image')";
	$run90=mysqli_query($con,$q90);
	if($run90){
		move_uploaded_file($admin_image_temp,"admin_image/".$admin_image);
		echo"<script> alert('Category Submited');
		location.href='index.php?insert_user';
		</script>
		";
	}
}
?>