<?php
include('include/navbar.php');
?>
<?php
if(isset($_POST['submit'])){
	//admin mail
	$senderName=$_POST['name'];
	$senderEmail=$_POST['email'];
	$senderSubject=$_POST['subject'];
	$senderMessage=$_POST['message'];
	$receiverEmail='newmfdsaf@gmail.com';
	mail($receiverEmail,$senderName,$senderSubject,$senderMessage,$senderEmail);
	//customer mail
	$email=$_POST['email'];
	$subject="Welcome to our website";
	$msg="I shall get you soon, thanks for mailing us.";
	$from="fsadfasdf@fggvh.com";
	mail($email,$subject,$msg,$from);
}
?>
<div id="content"><!-- content of shop -->
<div class="container"><!-- container of shop -->
<div class="row">
<div class="col-md-12"><!-- first column  of shop -->
<ul class="breadcrumb">
<li> <a href="index.php">Home</a></li>
<li>Contact Us</li>
</ul>
</div><!-- column of shop end-->
</div>
<div class="row">
<div class="col-md-12"> <!-- col-md- start -->
<div class="boxx"> <!-- box start -->
<div class="box-header">
<center>
<h2>Contact Us</h2>
<p class="text-muted">
If you have any question, please feel free to contact us, our customer service center is working for you 24/7.
</p>
</center>
</div>
<form action="contactus.php" method="post">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" required="">
</div>

<div class="form-group">
<label>Email</label>
<input type="text" name="email" class="form-control" required="">
</div>

<div class="form-group">
<label>Subject</label>
<input type="text" name="subject" class="form-control" required="">
</div>

<div class="form-group">
<label>Message</label>
<textarea class="form-control" name="message"> </textarea>
</div>
<div class="text-center">
<button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-user-md"></i> Send Message</button>
</div>
</form>
</div> <!-- box-end -->
</div> <!-- col-md-9 start -->
</div>


</div><!-- column of shop end-->
</div><!-- content of shop end-->

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