<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}
if(isset($_GET['payement_delete'])){
	$delete_id=$_GET['payement_delete'];
	$q89="delete from payments where payment_id='$delete_id'";
	$run89=mysqli_query($con,$q89);
	if($run89){
		echo"<script> alert('Payment deleted');
		location.href='index.php?view_payment';
		</script>";
	}else{
		echo"<script> alert('Payment deletion failed');</script>";
	}
}
?>
