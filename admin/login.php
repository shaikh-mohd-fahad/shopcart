<?php
if(session_id()==''){
	session_start();
}
if(isset($_SESSION['admin_email'])){
	echo"<script>location.href='index.php?dashboard';</script>";
}
include_once("include/conn.php");
if(isset($_POST['submit'])){
	$admin_email=$_POST['admin_email'];
	$admin_pass=$_POST['admin_pass'];
	$q51="select * from admin where admin_email='$admin_email' and admin_pass='$admin_pass'";
	$run51=mysqli_query($con,$q51);
	$row_num51=mysqli_num_rows($run51);
	if($row_num51==1){
		$_SESSION['admin_email']=$admin_email;
		echo"<script> location.href='index.php?dashboard';</script>";
	}else{
		echo"<script>alert('your email/password is wrong');</script>";
	}
}
?>
<html lang="en">
<head>
<title>Admin Login</title>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width;initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap3.css">

<!-- link font awesome -->
<link href="css/all.min.css" rel="stylesheet">
<style>
body{
	background-color:teal;
	padding-top:10%;
}
.form-login{
	max-width:350px;
	padding:40px;
	border-radius:30px;
	background:#e9e9e9;
	margin:0 auto;
}
.form-login .form-login-heading{
	color:#337ab7;
	text-align:center;
}
.form-login .form-control:{
	position:relative;
	height:auto;
	box-sizing:border-box;
	padding:10px;
	font-size:16px;
}
.form-login input[type="email"]{
	margin-bottom:5px;
	border-bottom-right-radius:0px;
	border-bottom-left-radius:0px;
}
.form-login input[type="password"]{
	margin-bottom:10px;
	border-bottom-right-radius:0px;
	border-bottom-left-radius:0px;
}
.form-login .forget-password{
	text-align:center;
	margin-top:30px;
	margin-bottom:0px;
}
</style>

</head>
<body>
<div class="container">
<form class="form-login" action="" method="post">
<h3 class='form-login-heading'>Admin Login</h3>
<input class="form-control" type="email" name="admin_email" placeholder="Email" required>
<input class="form-control" type="password" name="admin_pass" placeholder="Password" required>
<input class="btn btn-primary btn-block btn-lg" type="submit" name="submit" placeholder="Login" required>
<h4 class="forget-password"><a href="forget_password.php">Forget your Password?</a></h4>
</form>
</div>

<!-- link all js -->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>