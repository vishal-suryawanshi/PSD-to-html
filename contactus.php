<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="lightbox.min.css">
</head>
<script src="lightbox-plus-jquery.min.js"></script>
<body style="background-color: #f9f4eb; margin-right: 0px;margin-bottom: 0px;">
<div>
	
	<?php 
 	include('header.php');
 ?>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal" action="/action_page.php">
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="email">Email:</label>
			      <div class="col-sm-10">
			        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="pwd">Password:</label>
			      <div class="col-sm-10">          
			        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
			      </div>
			    </div>
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <button type="submit" class="btn btn-default">Submit</button>
			      </div>
			    </div>
			  </form>
			</div>
			<div class="col-md-6">
				
			</div>
		</div>
	</div>


	<?php 
 	include('footer.php');
 ?>


</div>


</body>
</html>