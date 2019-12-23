<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="one.js"></script>
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
			<div class="col-md-6" style="margin-top: 25px;">
				<p>Please write your enquiry below..</p>
				<form class="form-horizontal" action="/action_page.php">
			    <div class="form-group">
			      <label style="color: #7f6942;" class="control-label col-sm-2" for="Name">Name:</label>
			      <div class="col-sm-10">
			        <input type="text" class="form-control" id="Name" required name="email">
			      </div>
			    </div>
			    <div class="form-group">
			      <label style="color: #7f6942;" class="control-label col-sm-2" for="email">Email:</label>
			      <div class="col-sm-10">
			        <input type="email" class="form-control" id="email" required name="email">
			      </div>
			    </div>
			    <div class="form-group">
			      <label style="color: #7f6942;" class="control-label col-sm-2" for="Phone">Phone Number:</label>
			      <div class="col-sm-10">
			        <input type="text" class="form-control" id="Phone
			        " required name="Phone">
			      </div>
			    </div>
			    <div class="form-group">
			      <label style="color: #7f6942;" class="control-label col-sm-2" for="Subject">Subject:</label>
			      <div class="col-sm-10">
			        <input type="text" class="form-control" id="Subject" required name="Subject">
			      </div>
			    </div>
			    <div class="form-group">
			      <label style="color: #7f6942;" class="control-label col-sm-2" for="Enquiry">Enquiry:</label>
			      <div class="col-sm-10">
			        <textarea type="text" class="form-control" id="Enquiry" required name="Enquiry"></textarea>
			      </div>
			    </div>
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <button style="color: #7f6942; type="submit" class="btn btn-default">Submit</button>
			      </div>
			    </div>
			  </form>
			</div>
			<div class="col-md-6" style="border-left: 1px solid  #7f6942;">
				<p><strong>M/S. Jaysing G. Hujare (Jadhav)</strong></p>
				<p> <strong>Kolhapur Office : </strong></p>
				<p>1360 ‘B’ Ward, Vishnu Plaza, Khari corner,<br>Kolhapur – 416012</p>
				<p >Office : (+91) ( 0231) 2623922<br> Mobile : (+91) 9822006831<br> Email : director@jaysinghujare.com , jaysinggh@rediffmail.com</p>
				<div class"gmap"=""><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.708422109014!2d74.22053131434431!3d16.69146812689612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc10009475415fb%3A0x31c01de2e1171b7!2sM%2Fs.%20Jaysing%20Hujare!5e0!3m2!1sen!2sin!4v1570767106400!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
			</div>
		</div>
	</div>


	<?php 
 	include('footer.php');
 ?>


</div>


</body>
</html>