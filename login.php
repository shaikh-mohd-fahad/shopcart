<?php
include_once('include/navbar.php');
include_once('include/conn.php');
if(isset($_POST['submit'])){
	$c_email=$_POST['c_email'];
	$c_pass=$_POST['c_pass'];
	$q33="select * from customers where customer_email='$c_email' and customer_pass='$c_pass'";
	$run33=mysqli_query($con,$q33);
	$row33=mysqli_fetch_array($run33);
	$row_num33=mysqli_num_rows($run33);
	//
	if($row_num33==0){
		echo"<script>alert('your email or password is wrong');</script>";
		exit();
	}
	$get_ip=getUserIP();
	$q34="select * from cart where ip_add='$get_ip'";
	$run34=mysqli_query($con,$q34);
	$row_num34=mysqli_num_rows($run34);
	
	if($row_num33==1 && $row_num34==0){
		$_SESSION['email']=$c_email;
		$_SESSION['username']=$row33['customer_name'];
		echo"<script> alert('login successfully');</script>";
		header('location:myaccount.php?my_order');
	}else{
		$_SESSION['email']=$c_email;
		$_SESSION['username']=$row33['customer_name'];
		echo"<script> alert('login successfully');</script>";
		header('location:checkout.php');
	}
}
?>
<div id="content"><!-- content of shop -->
<div class="container"><!-- container of shop -->
<div class="row">
<div class="col-md-12"><!-- first column  of shop -->
<ul class="breadcrumb">
<li> <a href="index.php">Home</a></li>
<li>Login</p>
</ul>
</div><!-- column of shop end-->
</div>
<div class="row">
<div class="col-md-12"> <!-- col-md-12 start -->
<div class="boxx"> <!-- box start -->
<div class="box-header">
<center>
<h2>Customer Login</h2>
</center>
</div>
<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
<label>Customer Email</label>
<input type="email" name="c_email" class="form-control" required>
</div>

<div class="form-group">
<label>Customer Password</label>
<input type="password" name="c_pass" class="form-control" required>
</div>


<div class="text-center">
<button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-user-md"></i> Login</button>
</div>
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