<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}
if(isset($_GET['delete_p_cat'])){
	$delete_id=$_GET['delete_p_cat'];
	$q69="delete from product_categories where p_cat_id='$delete_id'";
	$run69=mysqli_query($con,$q69);
	if($run69){
		echo"<script> alert('Produtct Category deleted');
		location.href='index.php?view_product_cat';
		</script>";
	}
}
?>
