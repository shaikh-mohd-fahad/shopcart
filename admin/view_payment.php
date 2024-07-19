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
<li class="active"><i class="fas fa-dashboard"></i> Dashboard / view Payment</li>
</ul>
</div> <!-- col-md-12 end -->
</div> <!-- row end -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> View Payments</h3>
	</div>
	<div class="panel-body">
	<div class="table-responsive">
		<table class="table table-bordered table-hover  table-striped">
		<thead>
			<tr>
				<th>Payment No</th>
				<th>Invoice No</th>
				<th>Amount Paid</th>
				<th>Pament Method</th>
				<th>Reference No</th>
				<th>Payment Mode</th>
				<th>Payment Date</th>
				<th>Delete Payment </th>
			</tr>
			<?php
			$q88="select * from payments";
			$run88=mysqli_query($con,$q88);
			while($row88=mysqli_fetch_array($run88)){
				?>
			<tr>
			<td><?php echo$row88['payment_id'];?></td>
			<td><?php echo$row88['invoice_id'];?></td>
			<td><?php echo$row88['amount'];?></td>
			<td><?php echo$row88['payment_mode'];?></td>
			<td><?php echo$row88['ref_no'];?></td>
			<td><?php echo$row88['code'];?></td>
			<td><?php echo$row88['payment_date'];?></td>
			
			<td><a href="index.php?payement_delete=<?php echo$row88['payment_id'];?>"><i class="fa fa-trash"></i> Delete <a/></td>
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
