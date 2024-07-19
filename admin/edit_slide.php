<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}
if(isset($_GET['edit_slide'])){
	$edit_id=$_GET['edit_slide'];
	$q80="select * from slider where id='$edit_id'";
	$run80=mysqli_query($con,$q80);
	$row80=mysqli_fetch_array($run80);
}
?>
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Edit Slider</h3>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo$row80['id'];?>" class="form-control" required>
		<div class="form-group">
			<label class="col-md-3 control-label"> Slider Name</label>
			<div class="col-md-6">
			<input type="text" name="slider_name" value="<?php echo$row80['slider_name'];?>" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Slider Image</label>
			<div class="col-md-6">
			<input type="file" name="slider_image"  class="form-control"><br>
			<img src="slider_image/<?php echo$row80['slider_image'];?>" height="80px">
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
	$slider_name=$_POST['slider_name'];
	$slider_image=$_FILES['slider_image']['name'];
	$slider_image_temp=$_FILES['slider_image']['tmp_name'];
	$id=$_POST['id'];
	
	$q81="update slider set slider_name='$slider_name', slider_image='$slider_image' where id='$id'";
	$run81=mysqli_query($con,$q81);
	if($run81){
		move_uploaded_file($slider_image_temp,"slider_image/".$slider_image);
		echo"<script>alert('Slider Updated Successfully');
		location.href='index.php?view_slider';
		</script>";
	}
}
?>