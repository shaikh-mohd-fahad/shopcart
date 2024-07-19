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
<li class="active"><i class="fas fa-dashboard"></i> Dashboard / Insert Slider</li>
</ul>
</div> <!-- col-md-12 end -->
</div> <!-- row end -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Insert Slider</h3>
	</div>
	<div class="panel-body">
	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label class="col-md-3 control-label">  Slider Name</label>
			<div class="col-md-6">
			<input type="text" name="slider_name"class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Slider Image</label>
			<div class="col-md-6">
			<input type="file" name="slider_image" class="form-control">
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
	$slider_name=$_POST['slider_name'];
	$slider_image=$_FILES['slider_image']['name'];
	$slider_image_temp=$_FILES['slider_image']['tmp_name'];
	$q77="insert into slider(slider_name, slider_image) values('$slider_name', '$slider_image')";
	$run77=mysqli_query($con,$q77);
	if($run77){
		move_uploaded_file($slider_image_temp,"slider_image/".$slider_image);
		echo"<script> alert('Slider Submited');
		location.href='index.php?insert_slider';
		</script>
		";
	}
}
?>