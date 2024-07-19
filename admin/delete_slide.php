<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}
if(isset($_GET['delete_slide'])){
	$delete_id=$_GET['delete_slide'];
	$q79="delete from slider where id='$delete_id'";
	$run79=mysqli_query($con,$q79);
	if($run79){
		echo"<script> alert('Slide deleted');
		location.href='index.php?view_slider';
		</script>";
	}else{
		echo"<script> alert('Slide deletion failed');</script>";
	}
}
?>
