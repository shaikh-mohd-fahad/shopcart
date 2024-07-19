<?php
include('include/navbar.php');
include_once('include/conn.php');
if(isset($_GET['order_id'])){
	$order_id=$_GET['order_id'];
}
?>
<div id="content"><!-- content of shop -->
<div class="container"><!-- container of shop -->
<div class="row">
<div class="col-md-12"><!-- first column  of shop -->
<ul class="breadcrumb">
<li> <a href="index.php">Home</a></li>
<li>My Account</p>
</ul>
</div><!-- column of shop end-->
</div>
<div class="row">
<div class="col-md-3">
<?php
include('include/customer_sidebar.php');
?>
</div>
<div class="col-md-9"><!-- col-md-9 start -->
<div class="boxx">
<h1 class="text-center">Please confirm your payment </h1>
<form action="confirm.php?update_id=<?php echo$order_id;?>" method="post" enctype="multipart/form-data">
<div class="form-group">
<label>Invoice Number</label>
<input type="text" name="invoice_number" class="form-control" required="">
</div>

<div class="form-group">
<label>Amount</label>
<input type="text" name="amount" class="form-control" required="">
</div>

<div class="form-group">
<label>Transaction Number</label>
<input type="text" name="tr_number" class="form-control" required="">
</div>

<div class="form-group">
<label>Select Payment Mode</label>
<select class="form-control" name='payment_mode'>
<option>Cash On Deliver</option>
<option>Bank Transfer</option>
<option>Paytm</option>
<option>Bhim UPI</option>
</select>
</div>


<div class="form-group">
<label>Date</label>
<input type="date" name="date" class="form-control" required="">
</div>

<div class="form-group text-center">
<input type="submit" class="btn btn-primary" name="confirm_payment" value="Confirm Payment">
</div>
</form>
<?php
if(isset($_POST['confirm_payment'])){
	$update_id=$_GET['update_id'];
	$invoice_number=$_POST['invoice_number'];
	$amount=$_POST['amount'];
	$payment_mode=$_POST['payment_mode'];
	$tr_number=$_POST['tr_number'];
	$date=$_POST['date'];
	$complete='Complete';
	$q44="insert into payments(invoice_id, amount, payment_mode, ref_no, payment_date) values('$invoice_number','$amount','$payment_mode','$tr_number','$date')";
	$run44=mysqli_query($con,$q44);
	if($run44){
		echo"<script>alert('payment query run');</script>";	
		//
		$q45="update customer_order set order_state='Complete' where order_id='$update_id'";
		$run45=mysqli_query($con,$q45);
		if($run45){
			echo"<script>alert('complete order query run');</script>";	
		}else{
			echo"<script>alert('complete order query not run');</script>";
		}
		echo"<script>alert('your order received');</script>";
		echo"<script>location.href='myaccount.php?my_order';</script>";
	}else{
		echo"<script>alert('payment query not run');</script>";
	}
	
}

?>
</div>
</div> <!-- col-md-9 end -->
</div>
</div><!-- column of shop end-->
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