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
<li class="active"><i class="fas fa-dashboard"></i> Dashboard / View Product</li>
</ul>
</div> <!-- col-md-12 end -->
</div> <!-- row end -->
<div class="row">
<div class="col-sm-12">
<div class="panel panel-default">
<div class="panel-heading">
	<h3 class="panel-title"><i class="fa fa-money fa-fw "></i> View Products</h3>
</div>
<div class="panel-body">
	 <div class="table-responsive">
		<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr>
				<th>Product Id</th>
				<th>Product Title</th>
				<th>Product Image</th>
				<th>Product Price</th>
				<th>Product Sold</th>
				<th>Product Keyword</th>
				<th>Product Date</th>
				<th>Product Delete</th>
				<th>Product Edit</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$q59="select * from products order by 1 desc";
			$run59=mysqli_query($con,$q59);
			while($row59=mysqli_fetch_array($run59)){
			?>
			<tr>
			<td><?php echo$row59['product_id'];?></td>
			<td><?php echo$row59['product_title'];?></td>
			<td><img src="products_image/<?php echo$row59['product_img1'];?>" height="100px" width="100px" class="img-respo nsive"></td>
			<td><?php echo$row59['product_price'];?></td>
			<td><?php echo$row59['product_id'];?></td>
			<td><?php echo$row59['product_keyword'];?></td>
			<td><?php echo$row59['product_date'];?></td>
			<td>
			<a href="index.php?delete_product=<?php echo$row59['product_id'];?>"><i class="fa fa-trash"></i> Delete <a/></td>
			<td>
			<a href="index.php?edit_product=<?php echo$row59['product_id'];?>"><i class="fa fa-pencil"></i> Edit <a/></td>
			</tr>
			<?php
			}
			?>
		</tbody>
		</table>
	 </div>
</div>
</div>
</div>
</div>