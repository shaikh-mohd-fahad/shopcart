<?php
include_once('include/conn.php');
include_once('include/navbar.php');
include_once('function/functions.php');
?>
<div class="container text-center mb-5" id="slider"><!-- carousel container start -->
<div class="col-md-12">
<div class="carousel slide" id="myCarousel" data-ride="carousel"> <!-- carousel start -->
<ol class="carousel-indicators"> <!-- carousel indicators start -->
<li data-slide-to="0" data-target="#myCarousel" class="active"></li>
<li data-slide-to="1" data-target="#myCarousel"></li>
<li data-slide-to="2" data-target="#myCarousel"></li>
</ol> <!-- carousel indicators end -->
<div class="carousel-inner"> <!-- carousel inner start -->
<?php
$q="select * from slider limit 0,1";
$run=mysqli_query($con,$q);
while($row=mysqli_fetch_array($run)){
	$slider_image=$row['slider_image'];
	$slider_name=$row['slider_name'];
	echo"
	<div class='item active'>
	<img src='admin/slider_image/$slider_image' height='400px' width='900px'>
	</div>
	";
}
?>
<?php
$q="select * from slider limit 1,3";
$run=mysqli_query($con,$q);
while($row=mysqli_fetch_array($run)){
	$slider_image=$row['slider_image'];
	$slider_name=$row['slider_name'];
	echo"
	<div class='item'>
	<img src='admin/slider_image/$slider_image' height='400px' width='900px'>
	</div>
	";
}
?>
</div> <!-- carousel inner end -->
<a href="#myCarousel" data-slide="prev" class="left carousel-control">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>

<a href="#myCarousel" data-slide="next" class="right carousel-control">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div> <!-- carousel end -->
</div> <!-- column end -->
</div><!-- carousel container end -->

<div id="advantage"><!-- advantage start -->
<div class="container"><!-- container start -->
<div class="same-height-row"><!-- row start -->
<div class="col-sm-4"><!-- column start -->
<div class="box same-height">
<div class="icon"><!-- icon section start -->
<i class="fa fa-heart"></i>
</div><!-- icon section end -->
<h3 class=""><a href="#">Best Prices</a></h3>
<p class=""> This is heart. This is heart. This is heart. This is heart. This is heart.</p>

</div>
</div><!-- column end -->

<div class="col-sm-4"><!-- column start -->
<div class="box same-height">
<div class="icon"><!-- icon section start -->
<i class="fa fa-heart"></i>
</div><!-- icon section end -->
<h3 class=""><a href="#">100% Satisfaction from us.</a></h3>
<p class=""> This is heart. This is heart. This is heart. This is heart. This is heart.</p>
</div>
</div><!-- column end -->

<div class="col-sm-4"><!-- column start -->
<div class="box same-height">
<div class="icon"><!-- icon section start -->
<i class="fa fa-heart"></i>
</div><!-- icon section end -->
<h3 class=""><a href="#">We love our customer</a></h3>
<p class=""> This is heart. This is heart. This is heart. This is heart. This is heart.</p>
</div>
</div><!-- column end -->
</div><!-- row end -->
</div><!-- container end -->
</div><!-- advantage end -->

<div id="hotb"><!-- hotbox start -->
<div class="container">
<div class="col-md-12">
<h2>Latest This Week</h2>
</div>
</div>
</div><!-- hotbox end -->

<div class="container" id="content"><!-- content section -->
<div class="row"><!-- row of content section -->
<?php
getproducts();
?>
</div><!-- row section end-->
</div><!-- content section end -->

<!-- Include Footer-->
<?php
include('include/footer.php');
?>

<!-- link all js -->
<!-- Latest compiled JavaScript -->
<!-- jQuery library -->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>