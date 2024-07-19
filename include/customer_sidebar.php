<?php
include_once('include/conn.php');
$email=$_SESSION['email'];
$q41="select * from customers where customer_email='$email'";
$run41=mysqli_query($con,$q41);
$row41=mysqli_fetch_array($run41);
$customer_image=$row41['customer_image'];
$customer_name=$row41['customer_name'];
?>
<div class="panel panel-default sidebar-menu"><!-- panel start -->
<div class="panel-heading"><!-- panel heading start -->
<center>
<img src="customer/customer_images/<?php echo$customer_image;?>" class="img-responsive" alt="Customer Image" height="300px">
</center>
<br>
<h3 align="center" class="panel-title">Name:<?php echo$customer_name;?></h3>
</div><!-- panel heading end -->
<div class="panel-body"><!-- panel body start -->
<ul class="nav nav-pills nav-stacked">
<li class="<?php if(isset($_GET['my_order'])){echo "active";} ?>"> <a href="myaccount.php?my_order"><i class="fa fa-list"></i> My Order</a></li>

<li class="<?php if(isset($_GET['pay_offline'])){echo "active";} ?>"> <a href="myaccount.php?pay_offline"><i class="fa fa-bolt"></i> Pay Offline</a></li>

<li class="<?php if(isset($_GET['my_add'])){echo "active";} ?>"> <a href="myaccount.php?my_add"><i class="fa fa-user"></i> My Address</a></li>

<li class="<?php if(isset($_GET['edit_acc'])){echo "active";} ?>"> <a href="myaccount.php?edit_acc"><i class="fa fa-pencil"></i> Edit Account</a></li>

<li class="<?php if(isset($_GET['change_pswd'])){echo "active";} ?>"> <a href="myaccount.php?change_pswd"><i class="fa fa-user"></i> Change Password</a></li>

<li class="<?php if(isset($_GET['my_wishlist'])){echo "active";} ?>"> <a href="myaccount.php?my_wishlist"><i class="fa fa-list"></i> My Wishlist</a></li>

<li class="<?php if(isset($_GET['del_acc'])){echo "active";} ?>"> <a href="myaccount.php?del_acc"><i class="fa fa-trace-o"></i> Delete Account</a></li>

<li class="<?php if(isset($_GET['logout'])){echo "active";} ?>"> <a href="myaccount.php?logout"><i class="fa fa-sign-out"></i> Logout</a></li>

</ul>
</div><!-- panel body end -->
</div><!-- panel end -->