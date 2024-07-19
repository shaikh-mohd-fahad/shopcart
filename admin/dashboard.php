<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}
?>
<div class="row">
<div class="col-lg-12">
	<h1 class="page-header">Dashboard</h1>
	<ol class="breadcrumb">
		<li class="active">
		<i class="fa fa-dashboard"></i>Dashboard
		</li>
	</ol>
</div>
</div>
<div class="row">
<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 start-->
<div class="panel panel-primary"><!--panel panel-primary start-->
<div class="panel-heading"><!-- panel-heading start-->
<div class="row"><!-- row start-->
<div class="col-xs-3"><!-- col-xs-3 start-->
<i class="fa fa-tasks fa-5x"></i>
</div><!-- col-xs-3 end-->
<div class="col-xs-9 text-right"><!-- col-xs-9 start-->
<div class="huge"><?php echo$row_num53;?></div>
<div>Products</div>
</div><!-- col-xs-9 end-->
</div><!-- row end-->
</div><!-- panel-heading end-->
<a href="index.php?view_product">
<div class="panel-footer">
<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<br class="clearfix">
</div>
</a>
</div><!-- panel panel-primary end-->
</div><!-- col-lg-3 col-md-6 end-->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 start-->
<div class="panel panel-green"><!--panel panel-primary start-->
<div class="panel-heading"><!-- panel-heading start-->
<div class="row"><!-- row start-->
<div class="col-xs-3"><!-- col-xs-3 start-->
<i class="fa fa-comments fa-5x"></i>
</div><!-- col-xs-3 end-->
<div class="col-xs-9 text-right"><!-- col-xs-9 start-->
<div class="huge"><?php echo$row_num54;?></div>
<div>Customers</div>
</div><!-- col-xs-9 end-->
</div><!-- row end-->
</div><!-- panel-heading end-->
<a href="index.php?view_product">
<div class="panel-footer">
<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<br class="clearfix">
</div>
</a>
</div><!-- panel panel-primary end-->
</div><!-- col-lg-3 col-md-6 end-->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 start-->
<div class="panel panel-red"><!-- panel panel-primary start-->
<div class="panel-heading"><!-- panel-heading start-->
<div class="row"><!-- row start-->
<div class="col-xs-3"><!-- col-xs-3 start-->
<i class="fa fa-shopping-cart fa-5x"></i>
</div><!-- col-xs-3 end-->
<div class="col-xs-9 text-right"><!-- col-xs-9 start-->
<div class="huge"><?php echo$row_num55;?></div>
<div>Products Categories</div>
</div><!-- col-xs-9 end-->
</div><!-- row end-->
</div><!-- panel-heading end-->
<a href="index.php?view_product">
<div class="panel-footer">
<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<br class="clearfix">
</div>
</a>
</div><!-- panel panel-primary end-->
</div><!-- col-lg-3 col-md-6 end-->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 start-->
<div class="panel panel-yellow"><!--panel panel-primary start-->
<div class="panel-heading"><!-- panel-heading start-->
<div class="row"><!-- row start-->
<div class="col-xs-3"><!-- col-xs-3 start-->
<i class="fa fa-support fa-5x"></i>
</div><!-- col-xs-3 end-->
<div class="col-xs-9 text-right"><!-- col-xs-9 start-->
<div class="huge"><?php echo$row_num56;?></div>
<div>Orders</div>
</div><!-- col-xs-9 end-->
</div><!-- row end-->
</div><!-- panel-heading end-->
<a href="index.php?view_product">
<div class="panel-footer">
<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<br class="clearfix">
</div>
</a>
</div><!-- panel panel-primary end-->
</div><!-- col-lg-3 col-md-6 end-->
</div>

<div class="row"><!-- row start -->
<div class="col-md-8"><!-- col-sm-8 start -->
<div class="panel panel-primary"><!-- panel panel-primary start -->
<div class="panel-heading"><!-- panel-heading start -->
<h3 class="panel-title">
<i class="fa fa-money fa-fw"></i> New Orders
</h3>
</div><!-- panel-heading end-->
<div class="panel-body"><!-- panel-body start -->
<div class="table-responsive"><!-- table-responsive start -->
<table class="table table-bordered table-striped table-hover">
<thead>
<tr>
<th>Order No</th>
<th>Product Id</th>
<th>Customer Emails</th>
<th>Invoice No</th>
<th>Total</th>
<th>Date</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<?php
$q57="select * from customer_order order by 1 desc";
$run57=mysqli_query($con,$q57);
while($row57=mysqli_fetch_array($run57)){
$q58="select * from customers where customer_id='{$row57['customer_id']}'";
$run58=mysqli_query($con,$q58);
$row58=mysqli_fetch_array($run58);
$customer_email=$row58['customer_email'];
?>
<tr>
<td><?php echo$row57['order_id'];?></td>
<td><?php echo$row57['product_id'];?></td>
<td><?php echo$customer_email;?></td>
<td><?php echo$row57['invoice_no'];?></td>
<td><?php echo$row57['due_amount'];?></td>
<td><?php echo$row57['order_date'];?></td>
<td><?php echo$row57['order_state'];?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div><!-- table-responsive end -->

<div class="text-right">
<a href="index.php?view_orders">View All Orders <i class="fa fa-arrow-circle-right"></i></a>
</div>

</div><!-- panel-body end -->
</div><!-- panel panel-primary end-->
</div><!-- col-md-8 end-->

<div class="col-md-4"><!-- col-md-4 start-->
<div class="panel"><!-- panel start-->
<div class="panel-body"><!-- panel-body start -->
<div class="thumb-info md-md"><!-- thumb-info md-md start -->
<img src="admin_image/<?php echo$admin_image;?>" class="rounded img-responsive">
<div class="thumb-info-title"><!-- thumb-info-title start -->
<span class="thumb-info-inner"><?php echo$admin_name; ?></span>
<span class="thumb-info-type"><?php echo$admin_job;?></span>
</div><!-- thumb-info-title end-->
</div><!-- thumb-info md-md end-->

<div class="md-md"><!-- md-md start-->
<div class="widget-content-expanded"><!-- widget-content-expanded start-->
<i class="fa fa-user"></i><span> Email: </span><?php echo$admin_email;?><br>
<i class="fa fa-user"></i><span> Country: </span><?php echo$admin_country;?> <br>
<i class="fa fa-user"></i><span> Contact: </span><?php echo$admin_contact;?><br>
</div><!-- widget-content-expanded end-->
<hr class="dotted-short">
<h5 class="text-muted">About </h5>
<p> <?php echo$admin_about;?> </p>
</div><!-- md-md end-->
</div><!-- panel-body end-->
</div><!-- panel end-->
</div><!-- col-md-4 end-->
</div><!-- row end-->