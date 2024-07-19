<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}
if(isset($_GET['delete_product'])){
	$delete_id=$_GET['delete_product'];
	$q60="delete from products where product_id='$delete_id'";
	$run60=mysqli_query($con,$q60);
	if($run60){
		echo"<script> alert('Produtct deleted');
		location.href='index.php?view_product';
		</script>";
	}
}
?>