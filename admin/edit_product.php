<?php
if(session_id()==''){
	session_start();
}
if(!isset($_SESSION['admin_email'])){
	echo"<script>location.href='login.php';</script>";
}
if(isset($_GET['edit_product'])){
	$edit_id=$_GET['edit_product'];
	$q61="select * from products where product_id='$edit_id'";
	$run61=mysqli_query($con,$q61);
	$row61=mysqli_fetch_array($run61);
	//fetching the category of products from table product_category
	$q62="select * from product_categories where p_cat_id='{$row61['p_cat_id']}'";
	$run62=mysqli_query($con,$q62);
	$row62=mysqli_fetch_array($run62);
	
	//fetching the category of products from table categories
	$q65="select * from categories where cat_id='{$row61['cat_id']}'";
	$run65=mysqli_query($con,$q65);
	$row65=mysqli_fetch_array($run65);
}
?>
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Edit Products</h3>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="p_id" value="<?php echo$row61['product_id'];?>" class="form-control" required>
		<div class="form-group">
			<label class="col-md-3 control-label"> Product Title</label>
			<div class="col-md-6">
			<input type="text" name="product_title" value="<?php echo$row61['product_title'];?>" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Product Category</label>
			<div class="col-md-6">
			<select name="product_cat" class="form-control">
			<option value="<?php echo$row62['p_cat_id'];?>"><?php echo$row62['p_cat_title'];?></option>
			<?php 
			$q63="select * from product_categories";
			$run63=mysqli_query($con,$q63);
			while($row63=mysqli_fetch_array($run63)){
			?>
			<option value="<?php echo$row63['p_cat_id'];?>"><?php echo$row63['p_cat_title'];?></option>
			<?php 
			}
			?>
			</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Category</label>
			<div class="col-md-6">
			<select name="cat" class="form-control">
			<option value="<?php echo$row65['cat_id'];?>"><?php echo$row65['cat_title'];?></option>
			<?php 
			$q64="select * from categories";
			$run64=mysqli_query($con,$q64);
			while($row64=mysqli_fetch_array($run64)){
			?>
			<option value="<?php echo$row64['cat_id'];?>"><?php echo$row64['cat_title'];?></option>
			<?php 
			}
			?>
			</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Product Image 1</label>
			<div class="col-md-6">
			<input type="file" name="product_img1" class="form-control" required>
			<br>
			<img src="products_image/<?php echo$row61['product_img1'];?>" height="70" width="70">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Product Image 2</label>
			<div class="col-md-6">
			<input type="file" name="product_img2" class="form-control" required>
			<br>
			<img src="products_image/<?php echo$row61['product_img2'];?>" height="70" width="70">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Product Image 3</label>
			<div class="col-md-6">
			<input type="file" name="product_img3" class="form-control" required>
			<br>
			<img src="products_image/<?php echo$row61['product_img3'];?>" height="70" width="70">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Product Price</label>
			<div class="col-md-6">
			<input type="text" name="product_price" class="form-control" value="<?php echo$row61['product_price']; ?>" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Product Keyword</label>
			<div class="col-md-6">
			<input type="text" name="product_keyword" class="form-control" value="<?php echo$row61['product_keyword']; ?>" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"> Product Description</label>
			<div class="col-md-6">
			<input type="text" name="product_desc" class="form-control" value="<?php echo$row61['product_desc']; ?>" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label"></label>
			<div class="col-md-6">
			<input type="submit" name="update" class="btn btn-primary" value="Update Product">
			</div>
		</div>
		</form>
	</div>
</div>
</div>
</div>
<?php
if(isset($_POST['update'])){
	$product_title=$_POST['product_title'];
	$product_cat=$_POST['product_cat'];
	$cat=$_POST['cat'];
	$p_id=$_POST['p_id'];
	$product_img1=$_FILES['product_img1']['name'];
	$product_img2=$_FILES['product_img2']['name'];
	$product_img3=$_FILES['product_img3']['name'];
	$temp_img1=$_FILES['product_img1']['tmp_name'];
	$temp_img2=$_FILES['product_img2']['tmp_name'];
	$temp_img3=$_FILES['product_img3']['tmp_name'];
	
	$product_keyword=$_POST['product_keyword'];
	$product_price=$_POST['product_price'];
	$product_desc=$_POST['product_desc'];
	
	$q66="update products set product_title='$product_title', p_cat_id='$product_cat', cat_id='$cat', product_img1='$product_img1', product_img2='$product_img2', product_img3='$product_img3', product_keyword='$product_keyword', product_price='$product_price', product_desc='$product_desc' where product_id='$p_id'";
	$run66=mysqli_query($con,$q66);
	if($run66){
		move_uploaded_file($temp_img1,"products_image/".$product_img1);
		move_uploaded_file($temp_img2,"products_image/".$product_img2);
		move_uploaded_file($temp_img3,"products_image/".$product_img3);
		echo"<script>alert('Product Updated Successfully');
		location.href='index.php?view_product';
		</script>";
	}else{
		echo"title =".$product_title." product cate= ".$product_cat." category = ".$cat." img1 = ".$product_img1." img2 = ".$product_img2." img3 = ".$product_img3." keyword= ".$product_keyword." price = ".$product_price." desc= ".$product_desc." id = ".$p_id;
	}
}
?>