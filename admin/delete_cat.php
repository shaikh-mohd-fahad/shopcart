<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}
if(isset($_GET['delete_cat'])){
	$delete_id=$_GET['delete_cat'];
	$q74="delete from categories where cat_id='$delete_id'";
	$run74=mysqli_query($con,$q74);
	if($run74){
		echo"<script> alert('Category deleted');
		location.href='index.php?view_categories';
		</script>";
	}
}
?>
