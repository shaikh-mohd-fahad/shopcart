<?php
if(session_id()==''){
session_start();
}
if(isset($_POST['sub47'])){
	$c_id=$_POST['c_id'];
	$c_name=$_POST['c_name'];
	$c_email=$_POST['c_email'];
	$c_num=$_POST['c_num'];
	$c_address=$_POST['c_address'];
	$c_city=$_POST['c_city'];
	$c_country=$_POST['c_country'];
	$c_image=$_FILES['c_image']['name'];
	$c_image_temp=$_FILES['c_image']['tmp_name'];
	$q47="update customers set customer_name='$c_name', customer_email='$c_email', customer_contact='$c_num', customer_address='$c_address', customer_city='$c_city', customer_country='$c_country',customer_image='$c_image' where customer_id='$c_id'";
	$run47=mysqli_query($con,$q47);
	if($run47){
		move_uploaded_file($c_image_temp,"customer/customer_images/".$c_image);
		echo"<script>alert('details updated successfully');</script>";
	}else{
		echo"<script>alert('details not updated');</script>";
	}
}
$email=$_SESSION['email'];
$q46="select * from customers where customer_email='$email'";
$run46=mysqli_query($con,$q46);
$row46=mysqli_fetch_array($run46);
$customer_id=$row46['customer_id'];
?>
<div class="boxx">
<center><h1>Edit Your Account</h1></center>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
<input type="hidden" name="c_id" value="<?php echo$row46['customer_id']; ?>" class="form-control">
</div>
<div class="form-group">
<label>Customer Name</label>
<input type="text" name="c_name" value="<?php echo$row46['customer_name']; ?>" class="form-control">
</div>

<div class="form-group">
<label>Customer email</label>
<input type="email" name="c_email" value="<?php echo$row46['customer_email']; ?>" class="form-control">
</div>

<div class="form-group">
<label>Contact Number</label>
<input type="text" name="c_num" value="<?php echo$row46['customer_contact']; ?>" class="form-control">
</div>

<div class="form-group">
<label>Address</label>
<input type="text" name="c_address" value="<?php echo$row46['customer_address']; ?>" class="form-control">
</div>

<div class="form-group">
<label>City</label>
<input type="text" name="c_city" value="<?php echo$row46['customer_city']; ?>" class="form-control">
</div>

<div class="form-group">
<label>Country</label>
<input type="text" name="c_country" value="<?php echo$row46['customer_country']; ?>" class="form-control">
</div>

<div class="form-group">
<label>Customer image</label>
<input type="file" name="c_image" value="" class="form-control">
<img src="customer/customer_images/<?php echo$row46['customer_image']; ?>" height="100px" width="100px">
</div>
<div class="form-group text-center">
<input type="Submit" name="sub47" value="Update" class="btn btn-success">
</div>
</form>
</div>