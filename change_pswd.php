<?php
$email=$_SESSION['email'];
if(isset($_POST['sub48'])){
	$new_pass=$_POST['new_pass'];
	$old_pass=$_POST['old_pass'];
	$con_pass=$_POST['con_pass'];
	if($new_pass==$con_pass){
		$q48="update customers set customer_pass='$new_pass' where customer_email='$email'";
		$run48=mysqli_query($con,$q48);
		if($run48){
			echo"<script>alert('Password changed successfully');</script>";
		}else{
			echo"<script>alert('You Enterig Wrong Password');</script>";
		}
	}else{
		echo"<script>alert('Password not matches');</script>";
	}
	
}
?>
<div class="boxx">
<center>
<h1 class="">Change Your Password </h1>
</center>
<form action="" method="post">
<div class="form-group">
<label>Current Password</label>
<input type="text" class="form-control" required name="old_pass">
</div>

<div class="form-group">
<label>New Password</label>
<input type="text" class="form-control" required name="new_pass">
</div>

<div class="form-group">
<label>Confirm Password</label>
<input type="text" class="form-control" required name="con_pass">
</div>

<div class="form-group text-center">
<input type="submit" class="btn btn-success" value="Update Password" name="sub48">
</div>
</form>
</div>