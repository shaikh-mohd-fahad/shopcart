<div class="panel panel-default sidebar-menu"> <!-- panel start -->
 <div class="panel-heading"><!-- panel heading start -->
 <h4 class="panel-title">Product Categories</h4>
 </div><!-- panel heading end -->
 <div class="panel-body"><!-- panel body start -->
 <ul class="nav nav-pills category-menu nav-stacked">
<?php
include_once('include/conn.php');
$q5="select * from product_categories";
$run5=mysqli_query($con,$q5);
while($row5=mysqli_fetch_array($run5)){
	$p_cat_id=$row5['p_cat_id'];
	$p_cat_title=$row5['p_cat_title'];
	echo"<li><a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a></li>";
}

?>
 </ul>
 </div><!-- panel body end -->
 </div><!-- panel end -->
 
 <div class="panel panel-default sidebar-menu"> <!-- panel start -->
 <div class="panel-heading"><!-- panel heading start -->
 <h4 class="panel-title">Categories</h4>
 </div><!-- panel heading end -->
 <div class="panel-body"><!-- panel body start -->
 <ul class="nav nav-pills category-menu nav-stacked">
<?php
include_once('include/conn.php');
$q6="select * from categories";
$run6=mysqli_query($con,$q6);
while($row6=mysqli_fetch_array($run6)){
	$cat_id=$row6['cat_id'];
	$cat_title=$row6['cat_title'];
	echo"<li><a href='shop.php?cat_id=$cat_id'>$cat_title</a></li>";
}

?>
 </ul>
 </div><!-- panel body end -->
 </div><!-- panel end -->