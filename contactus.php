<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
</head>
<script src="lightbox/lightbox-plus-jquery.min.js"></script>
<body>
	<?php 
	
 	include('header1.php');
 ?>
	<div class="container">
	<div class="contactus">
		<div class="row">
			<div class="col-md-6 ">
				<p style="color: #7f6942;">Please write your enquiry below..</p>
				<form class="form-horizontal" action="/action_page.php">
			    <div class="form-group">
			      <label class="control-label col-sm-2" style="text-align: left;" for="Name">Name:</label>
			      <div class="col-sm-10">
			        <input type="text" class="form-control input-size" style="text-align: left;" id="Name" required name="email">
			      </div>
			    </div>
			    <div class="form-group">
			      <label  class="control-label col-sm-2" style="text-align: left;"  for="email">Email:</label>
			      <div class="col-sm-10">
			        <input type="email" class="form-control input-size" style="text-align: left;" id="email" required name="email" >
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" style="text-align: left;" for="Phone">Phone Number:</label>
			      <div class="col-sm-10">
			        <input type="text" class="form-control input-size" id="Phone
			        " required name="Phone">
			      </div>
			    </div>
			    <div class="form-group">
			      <label  class="control-label col-sm-2" style="text-align: left;" for="Subject">Subject:</label>
			      <div class="col-sm-10">
			        <input type="text" class="form-control input-size" id="Subject" required name="Subject">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" style="text-align: left;" for="Enquiry">Enquiry:</label>
			      <div class="col-sm-10">
			        <textarea type="text" class="form-control input2-size" style="text-align: left;" id="Enquiry" required name="Enquiry"></textarea>
			      </div>
			    </div>
			    <div class="form-group">
			    	<div class="col-sm-6">
			      		<label class="control-label" style="text-align: left;" for="question">
			      			<span class="question1">How many eyes has a typical person?</span><br><br>
			      			<input type="text" class="form-control input-size-que" id="question" required name="question">
			      	 </label>
			      </div>
			    </div>
			    
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <button type="submit" class="input3-size"></button>
			      </div>
			    </div>
			  </form>
			</div>
			<div class="col-md-6" style="border-left: 1px solid #ada390;margin-top: 5px;" >
				<div class="contactus-info">
					<p>
						<strong>M/S. Jaysing G. Hujare (Jadhav)</strong></p>
					<p>	Civil Engineer & Contractor</p>
					</p><br>
					<p> <strong>Kolhapur Office : </strong></p>
					<p>1360 ‘B’ Ward, Vishnu Plaza, Khari corner,<br>Kolhapur – 416012</p>
					<p>Office : (+91) ( 0231) 2623922<br> Mobile : (+91) 9822006831<br> Email : director@jaysinghujare.com , jaysinggh@rediffmail.com</p>
					<div class"gmap"=""><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.708422109014!2d74.22053131434431!3d16.69146812689612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc10009475415fb%3A0x31c01de2e1171b7!2sM%2Fs.%20Jaysing%20Hujare!5e0!3m2!1sen!2sin!4v1570767106400!5m2!1sen!2sin" width="484" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
				</div>	
			</div>
	
	</div>
</div>
</div>
	<?php 
 	include('footer1.php');
 ?>





</body>
</html>