<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-header">
<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".nclp1">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="index.php?dashboard" class="navbar-brand">Admin Panel</a>
</div>
<ul class="nav navbar-right top-nav">
<li class="dropdown">
<a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo$admin_name;?> </a>
<ul class="dropdown-menu">
<li class="">
<a href="index.php?user_profile=<?php echo$admin_id;?>"><i class="fa fa-fw-user"></i> Profile</a>
</li>
<li class="">
<a href="index.php?view_product"><i class="fa fa-fw-envelope"></i> Products <span class="badge"><?php echo$row_num53;?></span></a>
</li>
<li class="">
<a href="index.php?view_customer"><i class="fa fa-fw-user"></i> Customer <span class="badge"><?php echo$row_num54;?></span></a>
</li>
<li class="">
<a href="index.php?pro_cat"><i class="fa fa-fw-gear"></i> Product Categories <span class="badge"><?php echo$row_num55;?></span></a>
</li>
<li class="divider"></li>
<li>
<a href="logout.php"><i class="fa fa-fw fa-power-off"></i>Logout</a>
</li>
</ul>
</li>
</ul>
<div class="collapse navbar-collapse nclp1">
<ul class="nav navbar-nav side-nav">
<li>
	<a href="index.php?dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
</li>
<li><!-- start here -->
	<a href="#" role="button" data-toggle="collapse" data-target="#clp1"><i class="fa fa-fw fa-table"></i> Products<i class="fa fa-fw fa-caret-down"></i></a>
	<ul class="collapse" id="clp1">
	<li>
	<a href="index.php?insert_product">Insert Products</a>
	</li>
	<li>
	<a href="index.php?view_product">View Products</a>
	</li>
	</ul>
</li><!-- end here -->

<li><!-- start here -->
	<a href="#" role="button" data-toggle="collapse" data-target="#clp2"><i class="fa fa-fw fa-table"></i> Products Categories<i class="fa fa-fw fa-caret-down"></i></a>
	<ul class="collapse" id="clp2">
	<li>
	<a href="index.php?insert_product_cat">Insert Products Cateogory</a>
	</li>
	<li>
	<a href="index.php?view_product_cat">View Products Cateogory</a>
	</li>
	</ul>
</li><!-- end here -->

<li><!-- start here -->
	<a href="#" role="button" data-toggle="collapse" data-target="#clp3"><i class="fa fa-fw fa-table"></i> Categories<i class="fa fa-fw fa-caret-down"></i></a>
	<ul class="collapse" id="clp3">
	<li>
	<a href="index.php?insert_categories">Insert Cateogory</a>
	</li>
	<li>
	<a href="index.php?view_categories">View Cateogory</a>
	</li>
	</ul>
</li><!-- end here -->

<li><!-- start here -->
	<a href="#" role="button" data-toggle="collapse" data-target="#clp4"><i class="fa fa-fw fa-table"></i> Slider<i class="fa fa-fw fa-caret-down"></i></a>
	<ul class="collapse" id="clp4">
	<li>
	<a href="index.php?insert_slider">Insert Slider</a>
	</li>
	<li>
	<a href="index.php?view_slider">View Slider</a>
	</li>
	</ul>
</li><!-- end here -->

<li>
<a href="index.php?view_customer">
<i class="fa fa-fw fa-edit"></i>View Customer
</a>
</li>
<li>
<a href="index.php?view_order">
<i class="fa fa-fw fa-list"></i>View Orders
</a>
</li>
<li>
<a href="index.php?view_payment">
<i class="fa fa-fw fa-pencil"></i>View Payements
</a>
</li>

<li><!-- start here -->
	<a href="#" role="button" data-toggle="collapse" data-target="#clp5"><i class="fa fa-fw fa-table"></i>Users<i class="fa fa-fw fa-caret-down"></i></a>
	<ul class="collapse" id="clp5">
	<li>
	<a href="index.php?insert_user">Insert User</a>
	</li>
	<li>
	<a href="index.php?view_user">View User</a>
	</li>
	<li>
	<a href="index.php?user_profile=<?php echo$admin_id;?>">Edit Profile</a>
	</li>
	</ul>
</li><!-- end here -->
</ul>
</div>
</nav>