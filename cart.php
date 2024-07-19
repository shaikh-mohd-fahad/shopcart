<?php
include('include/navbar.php');
include_once('include/conn.php');
?>
<?php
if(isset($_POST['update'])){
	foreach($_POST['remove'] as $remove_id){
		$q28="delete from cart where id='$remove_id'";
		$run28=mysqli_query($con,$q28);
		if($run28){
			header('location:cart.php');
		}
	}
}
?>
<div id="content" style="margin-bottom:25px"><!-- content of cart -->
<div class="container"><!-- container of cart -->
<div class="row"> <!-- row start -->
<div class="col-md-12"><!-- first column  of cart -->
<ul class="breadcrumb">
<li> <a href="index.php">Home</a></li>
<li>Cart</li>
</ul>
</div><!-- column of cart end-->
</div> <!-- row end -->

<div class="row"> <!-- row start -->
<div class="col-md-9" id="cart"> <!-- column start -->
<div class="boxx"><!-- Box Start -->
<form action="cart.php" method="post" enctype="multipart/form-data">
<h1>Shopping  Cart</h1>
<?php
$ip_add=getUserIP();
$q26="select * from cart where ip_add='$ip_add'";
$run26=mysqli_query($con,$q26);
?>

<p class="text-muted">Currently you have <?php item();?> item(s) in your cart.</p>
<div class="table-responsive"> <!-- table-responsive start -->
<table class="table">
<thead>
<tr>
<th colspan="2">Product</th>
<th>Quantity</th>
<th>Unit Price</th>
<th>Size</th>
<th>Delete</th>
<th>Sub Total</th>
</tr>
</thead>
<tbody>
<?php
while($row26=mysqli_fetch_array($run26)){
$pro_id=$row26['id'];
$pro_size=$row26['size'];
$pro_qty=$row26['qty'];
$q27="select * from products where product_id='$pro_id'";
$run27=mysqli_query($con,$q27);
$row27=mysqli_fetch_array($run27);
$p_title=$row27['product_title'];
$p_img1=$row27['product_img1'];
$p_price=$row27['product_price'];
$sub_total=$row27['product_price']*$pro_qty;

?>
<tr>
<td><img src="admin/products_image/<?php echo$p_img1;?>" class="img-responsive"></td>
<td><?php echo$p_title;?></td>
<td><?php echo$pro_qty;?></td>
<td>INR <?php echo$p_price;?></td>
<td><?php echo$pro_size;?></td>
<td><input type="checkbox" name="remove[]" value="<?php echo$pro_id;?>"></td>
<td>INR <?php echo$sub_total;?></td>
</tr>
<?php
}
?>
</tbody>
<tfoot>
<tr>
<th colspan="5">Total </th>
<th colspan="2"> INR <?php echo totalprice();?></th>
</tr>
</tfoot>
</table>
</div> <!-- table-responsive end -->
<div class="box-footer"> <!-- box-footer start -->
<div class="pull-left"> <!-- pull-left start -->
<a href="index.php" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue Shopping</a>
</div> <!-- pull-left end -->
<div class="pull-right"> <!-- pull right start -->
<button class="btn btn-default" type="submit" name="update" value="Update Cart"> <i class="fas fa-refresh"></i> Delete Item(s)</button>

<a href="checkout.php" class="btn btn-primary">Proceed to Checkout <i class="fa fa-chevron-right"></i></a>
</div> <!-- pull right end -->
</div> <!-- box-footer end -->

</form>
</div><!-- Box end -->

<div class="row same-height-row" style="margin:20px"> <!-- row start -->
<div class="col-md-3 col-sm-6"> <!-- column start -->
<div class="boxx same-height headline">
<h4 class="">You may also like these products</h4>
</div>
</div> <!-- column end -->
<div class="col-md-3 center-responsive"> <!-- column start -->
<div class="product same-height">
<a href="">
<img src="image/8_1-3.jpg" class="img-responsive">
</a>
<div class="text">
<h3 class="text-center"> <a href="details.php">T-shirt</a></h3>
<p class="price text-center">INR 299</p>
</div>
</div>
</div> <!-- column end -->

<div class="col-md-3 center-responsive"> <!-- column start -->
<div class="product same-height">
<a href="">
<img src="image/8_1-3.jpg" class="img-responsive">
</a>
<div class="text">
<h3 class="text-center"> <a href="details.php">T-shirt</a></h3>
<p class="price text-center">INR 299</p>
</div>
</div>
</div> <!-- column end -->

<div class="col-md-3 center-responsive"> <!-- column start -->
<div class="product same-height">
<a href="">
<img src="image/8_1-3.jpg" class="img-responsive">
</a>
<div class="text">
<h3 class="text-center"> <a href="details.php">T-shirt</a></h3>
<p class="price text-center">INR 299</p>
</div>
</div>
</div> <!-- column end -->

</div> <!-- row end -->
</div> <!-- column end -->
<div class="col-md-3"> <!-- col-md-3 start -->
<div class="boxx" id="order-summery">
<div class="box-header">
<h3>Order Summery</h3>
</div>
<p>Shipping and extra charges are calculated according to the values you enterd.
</p>
<div class="table-responsive">
<table class="table">
<tbody>
<tr>
<td>Order Subtotal</td>
<td> INR <?php totalprice();?> </td>
</tr>
<tr>
<td>Shipping And Handlink</td>
<td>INR 0</td>
</tr>
<tr>
<td>Tax</td>
<td>INR 0</td>
</tr>
<tr class="total">
<td>Total</td>
<td>INR <?php totalprice();?></td>
</tr>
</tbody>
</table>
</div>
</div>
</div> <!-- col-md-3 end -->

</div> <!-- row end -->

</div> <!-- container end -->
</div><!-- content of cart end-->

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