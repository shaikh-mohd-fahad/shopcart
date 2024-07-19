<?php
$email=$_SESSION['email'];
if(isset($_POST['yes'])){
	$q49="delete from customers where customer_email='$email'";
	$run49=mysqli_query($con,$q49);
	if($run49){
		session_destroy();
		echo"<script>location.href='index.php';</script>";
	}
}
?>
<div class="boxx text-center">
<h1 class='text-center'>Do you really want to delete your account</h1>
<form action="" method="post">
<input type="submit" name="yes" value="Yes, I want to Delete" class="btn btn-danger">

<input type="submit" name="no" value="No, I dont want"  class="btn btn-success"> 
</form>
</div>