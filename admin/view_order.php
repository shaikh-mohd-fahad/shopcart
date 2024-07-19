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
<li class="active"><i class="fas fa-dashboard"></i> Dashboard / view Order</li>
</ul>
</div> <!-- col-md-12 end -->
</div> <!-- row end -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> View Order</h3>
	</div>
	<div class="panel-body">
	<div class="table-responsive">
		<table class="table table-bordered table-hover  table-striped">
		<thead>
			<tr>
				<th>Order No</th>
				<th>Customer Email</th>
				<th>Invoice No</th>
				<th>Product Title</th>
				<th>Product Quantity</th>
				<th>Product Size</th>
				<th>Order Date</th>
				<th>Total Amount</th>
				<th>Order Status</th>
				<th>Delete Order</th>
			</tr>
			<?php
			$q84="select * from customer_order";
			$run84=mysqli_query($con,$q84);
			while($row84=mysqli_fetch_array($run84)){
				//getting product tittle from table products
				$q85="select * from products where product_id='{$row84['product_id']}'";
				$run85=mysqli_query($con,$q85);
				$row85=mysqli_fetch_array($run85);
				//getting Customer email from table products
				$q86="select * from customers where customer_id='{$row84['customer_id']}'";
				$run86=mysqli_query($con,$q86);
				$row86=mysqli_fetch_array($run86);
				?>
			<tr>
			<td><?php echo$row84['order_id'];?></td>
			<td><?php echo$row86['customer_email'];?></td>
			<td><?php echo$row84['invoice_no'];?></td>
			<td><?php echo$row85['product_title'];?></td>
			<td><?php echo$row84['qty'];?></td>
			<td><?php echo$row84['size'];?></td>
			<td><?php echo$row84['order_date'];?></td>
			<td><?php echo$row84['due_amount'];?></td>
			<td><?php echo$row84['order_state'];?></td>
			
			<td><a href="index.php?order_delete=<?php echo$row84['order_id'];?>"><i class="fa fa-trash"></i> Delete <a/></td>
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
