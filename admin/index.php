<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}
include_once"include/conn.php";
$q52="select * from admin where admin_email='{$_SESSION['admin_email']}'";
$run52=mysqli_query($con,$q52);
$row52=mysqli_fetch_array($run52);
$admin_id=$row52['admin_id'];
$admin_name=$row52['admin_name'];
$admin_job=$row52['admin_job'];
$admin_contact=$row52['admin_contact'];
$admin_email=$row52['admin_email'];
$admin_country=$row52['admin_country'];
$admin_image=$row52['admin_image'];
$admin_about=$row52['admin_about'];

//fetching products
$q53="select * from products";
$run53=mysqli_query($con,$q53);
$row_num53=mysqli_num_rows($run53);

//fetching number of rows  of customers
$q54="select * from customers";
$run54=mysqli_query($con,$q54);
$row_num54=mysqli_num_rows($run54);

//fetching number of rows  of product_categories
$q55="select * from product_categories";
$run55=mysqli_query($con,$q55);
$row_num55=mysqli_num_rows($run55);

//fetching number of rows  of product_categories
$q56="select * from customer_order";
$run56=mysqli_query($con,$q56);
$row_num56=mysqli_num_rows($run56);

?>
<html lang="en">
<head>
<title>Admin Area</title>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width;initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap3.css">

<!-- link font awesome -->
<link href="css/all.min.css" rel="stylesheet">

<!-- custome style link -->
<link href="css/style.css" rel="stylesheet">

</head>
<body style="background-color:white">

<div class="wrapper row">
<div class="col-md-3">
<?php
include_once("include/sidebar.php");
?>
</div>
<div class="col-md-9">
<div class="page-wrapper">
<div class="container-fluid">
	<?php
	if(isset($_GET['dashboard'])){
		include('dashboard.php');
	}
	if(isset($_GET['insert_product'])){
		include('insert_products.php');
	}
	if(isset($_GET['view_product'])){
		include('view_product.php');
	}
	if(isset($_GET['delete_product'])){
		include('delete_product.php');
	}
	if(isset($_GET['edit_product'])){
		include('edit_product.php');
	}
	if(isset($_GET['insert_product_cat'])){
		include('insert_product_cat.php');
	}
	if(isset($_GET['view_product_cat'])){
		include('view_product_cat.php');
	}
	if(isset($_GET['delete_p_cat'])){
		include('delete_p_cat.php');
	}
	if(isset($_GET['edit_p_cat'])){
		include('edit_p_cat.php');
	}
	if(isset($_GET['insert_categories'])){
		include('insert_categories.php');
	}
	if(isset($_GET['view_categories'])){
		include('view_categories.php');
	}
	if(isset($_GET['delete_cat'])){
		include('delete_cat.php');
	}
	if(isset($_GET['edit_cat'])){
		include('edit_cat.php');
	}
	if(isset($_GET['insert_slider'])){
		include('insert_slider.php');
	}
	if(isset($_GET['view_slider'])){
		include('view_slider.php');
	}
	if(isset($_GET['delete_slide'])){
		include('delete_slide.php');
	}
	if(isset($_GET['edit_slide'])){
		include('edit_slide.php');
	}
	if(isset($_GET['view_customer'])){
		include('view_customer.php');
	}
	if(isset($_GET['customer_delete'])){
		include('customer_delete.php');
	}
	if(isset($_GET['view_order'])){
		include('view_order.php');
	}
	if(isset($_GET['order_delete'])){
		include('order_delete.php');
	}
	if(isset($_GET['view_payment'])){
		include('view_payment.php');
	}
	if(isset($_GET['payement_delete'])){
		include('payement_delete.php');
	}
	if(isset($_GET['insert_user'])){
		include('insert_user.php');
	}
	if(isset($_GET['view_user'])){
		include('view_user.php');
	}
	if(isset($_GET['user_delete'])){
		include('user_delete.php');
	}
	if(isset($_GET['user_profile'])){
		include('user_profile.php');
	}
	?>
</div>
</div>
</div>
</div>

<!-- link all js -->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>