<div class="boxx">
<?php
$email=$_SESSION['email'];
$q35="select * from customers where customer_email='$email'";
$run35=mysqli_query($con,$q35);
$row35=mysqli_fetch_array($run35);
$customer_id=$row35['customer_id'];
?>
<h2 class="text-center">Payment Options</h4>
<p class="text-center lead">
<a href="order.php?c_id=<?php echo$customer_id; ?>">Pay Offline</a>
</p>
<p class="text-center lead">
<a href="">Pay using Paypal</a>
</p>
</div>