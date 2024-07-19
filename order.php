<?php
session_start();
include_once('include/conn.php');
include_once('function/functions.php');
if(isset($_GET['c_id'])){
	$customer_id=$_GET['c_id'];
}
if(isset($_SESSION['email'])){
	$ip_add=getUserIp();
}
$status='pending';
$invoice_no=mt_rand();
//fetching cart details
$q36="select * from cart where ip_add='$ip_add' order by 1 desc";
$run36=mysqli_query($con,$q36);
while($row36=mysqli_fetch_array($run36)){
	$pro_id=$row36['id'];
	$size=$row36['size'];
	$qty=$row36['qty'];
	//fetching products details
	$q37="select * from products where product_id='$pro_id'";
	$run37=mysqli_query($con,$q37);
	$row37=mysqli_fetch_array($run37);
	$sub_total_price=$row37['product_price']*$qty;
	
	$q38="insert into customer_order(customer_id,product_id, due_amount, invoice_no, qty, size,order_date, order_state) values('$customer_id','$pro_id','$sub_total_price','$invoice_no','$qty','$size',NOW(),'$status')";
	$run38=mysqli_query($con,$q38);
	
	$q40="delete from cart where ip_add='$ip_add'";
	$run40=mysqli_query($con,$q40);
	echo"<script>alert('Product Purchased Successfully');</script>";
	echo"<script>location.href='myaccount.php?my_order';</script>";
}
?>