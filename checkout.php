<?php
include_once('include/conn.php');
include_once('include/navbar.php');
?>
<div id="content"><!-- content of shop -->
<div class="container"><!-- container of shop -->
<div class="row">
<div class="col-md-12"><!-- first column  of shop -->
<ul class="breadcrumb">
<li> <a href="index.php">Home</a></li>
<li>Checkout</li>
</ul>
</div><!-- column of shop end-->
</div>
<div class="row">
<div class="col-md-3"> <!-- col-md-3 start -->
<?php
include('include/sidebar.php');
?>
</div> <!-- col-md-3 end -->
<div class="col-md-9"> <!-- col-md-9 start -->
<?php
if(isset($_SESSION['email'])){
	include_once('payment_options.php');
}else{
	echo"<script>location.href='login.php';</script>";
}
?>
</div>
</div>
</div><!-- container of shop end-->
</div><!-- content of shop end-->

<!-- Include Footer -->
<?php
include('include/footer.php');
?>

<!-- link all js -->
<!-- Latest compiled JavaScript -->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>