<?php
include_once('include/navbar.php');
include_once('include/conn.php');
if(!isset($_SESSION['email'])){
	echo"<script>alert('Please login');
	location.href='login.php';
	</script>";
}
?>
<div id="content"><!-- content of myaccount -->
<div class="container"><!-- container of myaccount -->
<div class="row">
<div class="col-md-12"><!-- first column  of myaccount -->
<ul class="breadcrumb">
<li> <a href="index.php">Home</a></li>
<li>My Account</li>
</ul>
</div><!-- column of myaccount end-->
</div>
<div class="row">
<div class="col-md-3">
<?php
include('include/customer_sidebar.php');
?>
</div>
<div class="col-md-9"><!-- col-md-9 start -->
<!-- Including my order page  -->
<?php
if(isset($_GET['my_order'])){
	include('my_order.php');
}
?>

<!-- Including pay offline page  -->
<?php
if(isset($_GET['pay_offline'])){
	include('pay_offline.php');
}
?>

<!-- Including change password page  -->

<?php
if(isset($_GET['change_pswd'])){
	include('change_pswd.php');
}
?>
<!-- Including delete account page  -->
<?php
if(isset($_GET['del_acc'])){
	include('del_acc.php');
}
?>

<!-- Including edit account page  -->
<?php
if(isset($_GET['edit_acc'])){
	include('edit_acc.php');
}
?>
<!-- Including edit account page  -->
<?php
if(isset($_GET['logout'])){
	echo"<script>location.href='logout.php';</script>";
}
?>
</div> <!-- col-md-9 end -->
</div>
</div><!-- column of myaccount end-->
</div><!-- content of myaccount end-->

<!-- Include Footer -->
<?php
include('include/footer.php');
?>

<!-- link all js -->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>