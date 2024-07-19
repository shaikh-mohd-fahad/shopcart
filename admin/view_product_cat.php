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
<li class="active"><i class="fas fa-dashboard"></i> Dashboard / view Product category</li>
</ul>
</div> <!-- col-md-12 end -->
</div> <!-- row end -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> View Product category</h3>
	</div>
	<div class="panel-body">
	<div class="table-responsive">
		<table class="table table-bordered table-hover  table-striped">
		<thead>
			<tr>
				<th>Product Category Id</th>
				<th>Product Title</th>
				<th>Product Desc</th>
				<th>Delete</th>
				<th>Edit</th>
			</tr>
			<?php
			$q68="select * from product_categories";
			$run68=mysqli_query($con,$q68);
			while($row68=mysqli_fetch_array($run68)){
				?>
			<tr>
			<td><?php echo$row68['p_cat_id'];?></td>
			<td><?php echo$row68['p_cat_title'];?></td>
			<td><?php echo$row68['p_cat_desc'];?></td>
			<td>
			<a href="index.php?delete_p_cat=<?php echo$row68['p_cat_id'];?>"><i class="fa fa-trash"></i> Delete <a/></td>
			<td>
			<a href="index.php?edit_p_cat=<?php echo$row68['p_cat_id'];?>"><i class="fa fa-pencil"></i> Edit <a/></td>
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
