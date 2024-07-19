<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}
if(isset($_GET['user_delete'])){
	$delete_id=$_GET['user_delete'];
	$q92="delete from admin where admin_id='$delete_id'";
	$run92=mysqli_query($con,$q92);
	if($run92){
		echo"<script> alert('Admin deleted');
		location.href='index.php?view_user';
		</script>";
	}else{
		echo"<script> alert('Admin deletion failed');</script>";
	}
}
?>
