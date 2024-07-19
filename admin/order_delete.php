<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}
if(isset($_GET['order_delete'])){
	$delete_id=$_GET['order_delete'];
	$q87="delete from customer_order where order_id='$delete_id'";
	$run87=mysqli_query($con,$q87);
	if($run87){
		echo"<script> alert('Order deleted');
		location.href='index.php?view_order';
		</script>";
	}else{
		echo"<script> alert('Order deletion failed');</script>";
	}
}
?>
