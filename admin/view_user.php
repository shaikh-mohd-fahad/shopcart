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
<li class="active"><i class="fas fa-dashboard"></i> Dashboard / view Admin</li>
</ul>
</div> <!-- col-md-12 end -->
</div> <!-- row end -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> View Admin</h3>
	</div>
	<div class="panel-body">
	<div class="table-responsive">
		<table class="table table-bordered table-hover  table-striped">
		<thead>
			<tr>
				<th>Admin No</th>
				<th>Admin Name</th>
				<th>Admin Email</th>
				<th>Admin Image</th>
				<th>Admin Job</th>
				<th>Admin Country</th>
				<th>Delete Admin</th>
			</tr>
			<?php
			$q91="select * from admin";
			$run91=mysqli_query($con,$q91);
			while($row91=mysqli_fetch_array($run91)){
				?>
			<tr>
			<td><?php echo$row91['admin_id'];?></td>
			<td><?php echo$row91['admin_name'];?></td>
			<td><?php echo$row91['admin_email'];?></td>
			<td><img src="admin_image/<?php echo$row91['admin_image'];?>" height="100px"></td>
			<td><?php echo$row91['admin_job'];?></td>
			<td><?php echo$row91['admin_country'];?></td>
			
			
			<td><a href="index.php?user_delete=<?php echo$row91['admin_id'];?>"><i class="fa fa-trash"></i> Delete <a/></td>
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
