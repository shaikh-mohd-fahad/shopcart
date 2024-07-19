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
<li class="active"><i class="fas fa-dashboard"></i> Dashboard / view Slider</li>
</ul>
</div> <!-- col-md-12 end -->
</div> <!-- row end -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> View Slider</h3>
	</div>
	<div class="panel-body">
	<?php
	$q78="select * from slider";
	$run78=mysqli_query($con,$q78);
	while($row78=mysqli_fetch_array($run78)){
	?>
		<div class="col-md-3">
		<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title text-center"><?php echo$row78['slider_name'];?></h3>
		</div>
		<div class="panel-body">
			<img src="slider_image/<?php echo$row78['slider_image'];?>" style="height:110px" class="img-responsive">
		</div>
		<div class="panel-footer">
			
			<a href="index.php?delete_slide=<?php echo$row78['id'];?>" class="pull-left">
			<i class="fa fa-trash"></i> Delete</a>
			
			<a href="index.php?edit_slide=<?php echo$row78['id'];?>" class="pull-right">
			<i class="fa fa-pencil"></i> Edit</a>
		
			<br class="clearfix">
		</div>
		</div>
		</div>
	<?php
	}
	?>
	</div>
</div>
</div>
</div>
