<div class="boxx">
<center>
<h1 class="">My Order </h1>
<p>Your all orders are shown below.</p>
</center>
<div class="table-responsive">
<table class="table table-bordered table-hover text-center">
<thead>
<tr class="text-center">
<th>Sr. No</th>
<th>Due Amount</th>
<th>Invoice Number</th>
<th>Quantity </th>
<th>Size</th>
<th>Order Date</th>
<th>Paid/Unpaid</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<?php
$q42="select * from customers where customer_email='{$_SESSION['email']}'";
$run42=mysqli_query($con,$q42);
if($run42){
$row42=mysqli_fetch_array($run42);
$customer_id=$row42['customer_id'];
}
$q43="select * from customer_order where customer_id='$customer_id'";
$run43=mysqli_query($con,$q43);
$i=1;
while($row43=mysqli_fetch_array($run43)){
?>
<tr>
<td><?php echo$i;?></td>
<td><?php echo$row43['due_amount'];?></td>
<td><?php echo$row43['invoice_no'];?></td>
<td><?php echo$row43['qty'];?></td>
<td><?php echo$row43['size'];?></td>
<td><?php echo$row43['order_date'];?></td>
<td><?php if($row43['order_state']=='pending'){echo'Unpaid';}else{echo'Paid';}?></td>
<td><a href="confirm.php?order_id=<?php echo$row43['order_id'];?>" target="_self" class="btn btn-primary btn-sm">Cofirm if paid</a></td>
</tr>
<?php
$i++;
}
?>
</tbody>
</table>
</div>
</div>