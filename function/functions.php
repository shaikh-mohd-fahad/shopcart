<?php
$db=mysqli_connect('localhost','root','','shop');

function getproducts(){
	global $db;
	$q1="select * from products order by 1 desc limit 0,6";
	$run1=mysqli_query($db,$q1);
	while($row1=mysqli_fetch_array($run1)){
		$pro_id=$row1['product_id'];
		$pro_price=$row1['product_price'];
		$pro_title=$row1['product_title'];
		$pro_img1=$row1['product_img1'];
		echo"<div class='col-md-4 col-sm-6'>
		<div class='product'>
		<a href='details.php?pro_id=$pro_id'>
		<img src='admin/products_image/$pro_img1' class='img-responsive' height='300px'></a>
		<div class='text'>
		<h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
		<p class='price'>INR $pro_price</p>
		<p class='buttons'>
		<a href='details.php?pro_id=$pro_id' class='btn btn-default'> View Details</a>
		<a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
          <i class='fa fa-shopping-cart'></i> Add to Cart</a>
		</p>
		</div>
		</div>
		
		</div>";
	}
}

//Getting user IP 
function getUserIP(){
	switch(true){
		case (!empty($_SERVER['HTPP_X_REAL_IP'])) : return $_SERVER['HTPP_X_REAL_IP'];
		case (!empty($_SERVER['HTPP_CLIENT_IP'])) : return $_SERVER['HTPP_CLIENT_IP'];
		case (!empty($_SERVER['HTPP_X_FORWARDED_FOR'])) : return $_SERVER['HTPP_X_FORWARDED_FOR'];
		default : return $_SERVER['REMOTE_ADDR'];
	}
	
}

function addCart(){
	global $db;
if(isset($_GET['add_cart'])){
	$ip_add=getUserIP();
	$p_id=$_GET['add_cart'];
	$product_quantity=$_POST['product_quantity'];
	$product_size=$_POST['product_size'];
	$check_product="select * from cart where ip_add='$ip_add' and id='$p_id'";
	$run21=mysqli_query($db,$check_product);
	if(mysqli_num_rows($run21)>0){
		echo"<script> alert('This product is already added');</script>";
		echo"<script> window.open('details.php?pro_id=$p_id','_self'); </script>";
	}
	else{
			
		$q22="INSERT INTO cart(id,ip_add,qty,size) VALUES('$p_id','$ip_add','$product_quantity','$product_size')";
		$run22=mysqli_query($db,$q22);
		
		if($run22){echo"<script> window.open('details.php?pro_id=$p_id','_self'); </script>";}
		else{
			echo"<script> alert('query is not running');</script>";
		}
	}
}
}
//getting user cart item
function item(){
	global $db;
	$ip_add=getUserIP();
	$q23="select * from cart where ip_add='$ip_add'";
	$run23=mysqli_query($db,$q23);
	$row_num=mysqli_num_rows($run23);
	echo $row_num;
}
//total price of  cart
function totalprice(){
	global $db;
	$total=0;
	$qty_total=0;
	$ip_add=getUserIP();
	$q24="select * from cart where ip_add='$ip_add'";
	$run24=mysqli_query($db,$q24);
	while($row24=mysqli_fetch_array($run24)){
		$pro_id=$row24['id'];
		$pro_qty=$row24['qty'];
		$q25="select * from products where product_id='$pro_id'";
		$run25=mysqli_query($db,$q25);
		while($row25=mysqli_fetch_array($run25)){
			$sub_total=$row25['product_price'];
			$qty_total=$pro_qty*$sub_total;
			$total+=$qty_total;
		}
	}
	echo $total;
}
?>