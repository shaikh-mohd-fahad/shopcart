<?php
include_once('include/conn.php');
include_once('include/navbar.php');
include_once('function/functions.php');
if(isset($_POST['submit'])){
	$c_email=$_POST['c_email'];
	$q31="select * from customers where customer_email='$c_email'";
	$run31=mysqli_query($con,$q31);
	if(mysqli_num_rows($run31)==1){
		$msg="<div class='alert alert-warning mt-5'>Your Email is already registered.</div>";
	}
	else{
	$c_name=$_POST['c_name'];
	$c_pass=$_POST['c_pass'];
	$c_contact=$_POST['c_contact'];
	$c_address=$_POST['c_address'];
	$c_city=$_POST['c_city'];
	$c_country=$_POST['c_country'];
	$creal_img1=$_FILES['c_img1']['name'];
	$ctmp_img1=$_FILES['c_img1']['tmp_name'];
	$c_ip=getUserIP();
	$q29="insert into customers(customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, customer_address, customer_image, customer_ip) values('$c_name', '$c_email', '$c_pass', '$c_country', '$c_city', '$c_contact', '$c_address','$creal_img1' , '$c_ip')";
	$run29=mysqli_query($con,$q29);
	if($run29){
		move_uploaded_file($ctmp_img1,"customer/customer_images/".$creal_img1);
		$msg="<div class='alert alert-success mt-4'>Registration successful</div>";
		
	}
	else{
		$msg="<div class='alert alert-warning mt-4'>Registration Failed</div>";
	}
	// checking that user was selected any thing or not
	$q30="select * from cart where ip_add='$c_ip'";
	$run30=mysqli_query($con,$q30);
	$count_rows=mysqli_num_rows($run30);
	if($count_rows>0){
		$_SESSION['email']=$c_email;
		$_SESSION['username']=$c_name;
		echo"<script> alert('registered successfully');</script>";
		header('location:checkout.php');
	}
	else{
		$_SESSION['email']=$c_email;
		$_SESSION['username']=$c_name;
		echo"<script> alert('registered successfully');</script>";
		header('location:index.php');
	}
}
}
?>
<div id="content"><!-- content of shop -->
<div class="container"><!-- container of shop -->
<div class="row">
<div class="col-md-12"><!-- first column  of shop -->
<ul class="breadcrumb">
<li> <a href="index.php">Home</a></li>
<li>Registration</li>
</ul>
</div><!-- column of shop end-->
</div>
<div class="row">
<div class="col-md-12"> <!-- col-md-12 start -->
<div class="boxx"> <!-- box start -->
<div class="box-header">
<center>
<h2>Customer Registration</h2>
</center>
</div>
<form action="customer_registration.php" method="post" enctype="multipart/form-data">
<div class="form-group">
<label>Customer Name</label>
<input type="text" name="c_name" class="form-control" required>
</div>

<div class="form-group">
<label>Customer Email</label>
<input type="email" name="c_email" class="form-control" required>
</div>

<div class="form-group">
<label>Customer Password</label>
<input type="password" name="c_pass" class="form-control" required>
</div>

<div class="form-group">
<label>Contact Number</label>
<input type="text" name="c_contact" class="form-control" required>
</div>

<div class="form-group">
<label>Address</label>
<input type="text" name="c_address" class="form-control" required>
</div>

<div class="form-group">
<label>City</label>
<input type="text" name="c_city" class="form-control" required>
</div>

<div class="form-group">
<label>Country</label>
<input type="text" name="c_country" class="form-control" required>
</div>
<div class="form-group">
<label> Image</label>
<input type="file" name="c_img1" class="form-control" required>
</div>

<div class="text-center">
<button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-user-md"></i> Send Message</button>
</div>
<?php
if(isset($msg)){
	echo$msg;
}
?>
</form>
</div> <!-- box-end -->
</div> <!-- col-md-12 end -->
</div>
</div><!-- column of shop end-->
</div><!-- content of shop end-->

<!-- Include Footer -->
<?php
include('include/footer.php');
?>

<!-- link all js -->
<!-- Latest compiled JavaScript -->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>