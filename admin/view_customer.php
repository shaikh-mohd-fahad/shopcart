<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}

?>
<div class="row"> <!-- row start -->
<div class="col-md-12"> <!-- col-md-12 start -->

<ul class="breadcrumb">
<li class="active"><i class="fas fa-dashboard"></i> Dashboard / View Customer</li>
</ul>
</div> <!-- col-md-12 end -->
</div> <!-- row end -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> View Customer</h3>
	</div>
	<div class="panel-body">
	<div class="table-responsive">
		<table class="table table-bordered table-hover  table-striped">
		<thead>
			<tr>
				<th>Customer No</th>
				<th>Customer Name</th>
				<th>Customer Email</th>
				<th>Customer Image</th>
				<th>Customer Country</th>
				<th>Customer City</th>
				<th>Customer Phone No</th>
				<th>Customer Delete</th>
				
			</tr>
			<?php
			$q82="select * from customers";
			$run82=mysqli_query($con,$q82);
			while($row82=mysqli_fetch_array($run82)){
				?>
			<tr>
			<td><?php echo$row82['customer_id'];?></td>
			<td><?php echo$row82['customer_name'];?></td>
			<td><?php echo$row82['customer_email'];?></td>
			<td><img src="../customer/customer_images/<?php echo$row82['customer_image'];?>" height="80px"></td>
			<td><?php echo$row82['customer_country'];?></td>
			<td><?php echo$row82['customer_city'];?></td>
			<td><?php echo$row82['customer_contact'];?></td>
			<td>
			<a href="index.php?customer_delete=<?php echo$row82['customer_id'];?>"><i class="fa fa-trash"></i> Delete <a/></td>
			</tr>
			<?php
			}
			?>
		</thead>
		</table>
	</div>
	</div>
</div>
</div>
</div>
