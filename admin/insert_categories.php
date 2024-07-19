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
<li class="active"><i class="fas fa-dashboard"></i> Dashboard / Insert category</li>
</ul>
</div> <!-- col-md-12 end -->
</div> <!-- row end -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Insert category</h3>
	</div>
	<div class="panel-body">
	<form class="form-horizontal" action="" method="post">
		<div class="form-group">
			<label class="col-md-3 control-label">  Category Title</label>
			<div class="col-md-6">
			<input type="text" name="cat_title"class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">  Category Description</label>
			<div class="col-md-6">
			<textarea type="text" name="cat_desc"class="form-control" ></textarea>
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
	$cat_title=$_POST['cat_title'];
	$cat_desc=$_POST['cat_desc'];
	$q72="insert into categories(cat_title, cat_desc) values('$cat_title', '$cat_desc')";
	$run72=mysqli_query($con,$q72);
	if($run72){
		echo"<script> alert('Category Submited');
		location.href='index.php?insert_categories';
		</script>
		";
	}
}
?>