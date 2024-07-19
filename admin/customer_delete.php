<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}
if(isset($_GET['customer_delete'])){
	$delete_id=$_GET['customer_delete'];
	$q83="delete from customers where customer_id='$delete_id'";
	$run83=mysqli_query($con,$q83);
	if($run83){
		echo"<script> alert('Customer deleted');
		location.href='index.php?view_customer';
		</script>";
	}else{
		echo"<script> alert('Customer deletion failed');</script>";
	}
}
?>
