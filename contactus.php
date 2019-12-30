<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
  <script src="one.js"></script>
</head>
<script src="lightbox-plus-jquery.min.js"></script>
<body style="background-color: #f9f4eb; margin-right: 0px;margin-bottom: 0px;">
<div>
	
	<?php 
	
 	include('header1.php');
 ?>
	<div class="container">
		<div class="cont2">
		<div class="row">
			<div class="col-md-6" style="margin-top: 25px; color: #80663a">
				<p>Please write your enquiry below..</p>
				<form class="form-horizontal" action="/action_page.php">
			    <div class="form-group">
			      <label class="control-label col-sm-2" style="text-align: left;" for="Name">Name:</label>
			      <div class="col-sm-10">
			        <input type="text" class="form-control ip-size" style="text-align: left;" id="Name" required name="email">
			      </div>
			    </div>
			    <div class="form-group">
			      <label  class="control-label col-sm-2" style="text-align: left;"  for="email">Email:</label>
			      <div class="col-sm-10">
			        <input type="email" class="form-control ip-size" style="text-align: left;" id="email" required name="email" >
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" style="text-align: left;" for="Phone">Phone Number:</label>
			      <div class="col-sm-10">
			        <input type="text" class="form-control ip-size" id="Phone
			        " required name="Phone">
			      </div>
			    </div>
			    <div class="form-group">
			      <label  class="control-label col-sm-2" style="text-align: left;" for="Subject">Subject:</label>
			      <div class="col-sm-10">
			        <input type="text" class="form-control ip-size" id="Subject" required name="Subject">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" style="text-align: left;" for="Enquiry">Enquiry:</label>
			      <div class="col-sm-10">
			        <textarea type="text" class="form-control ip2-size" style="text-align: left;" id="Enquiry" required name="Enquiry"></textarea>
			      </div>
			    </div>
			    <div class="form-group">
			    	<div class="col-sm-6">
			      		<label class="control-label" style="text-align: left;" for="question">
			      			<span class="question1">How many eyes has a typical person?</span><br><br>
			      			<input type="text" class="form-control ip-size-que" id="question" required name="question">
			      	 </label>
			      </div>
			    </div>
			    
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <button type="submit" class="ip3-size"></button>
			      </div>
			    </div>
			  </form>
			</div>
			<div class="col-md-6" style="border-left: 1px solid  #80663a;margin-top: 40px;" >
				<p>
					<strong>M/S. Jaysing G. Hujare (Jadhav)</strong><br>
					Civil Engineer & Contractor
				</p><br>
				<p> <strong>Kolhapur Office : </strong></p><br>
				<p>1360 ‘B’ Ward, Vishnu Plaza, Khari corner,<br>Kolhapur – 416012</p><br>
				<p>Office : (+91) ( 0231) 2623922<br> Mobile : (+91) 9822006831<br> Email : director@jaysinghujare.com , jaysinggh@rediffmail.com</p><br>
				<div class"gmap"=""><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.708422109014!2d74.22053131434431!3d16.69146812689612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc10009475415fb%3A0x31c01de2e1171b7!2sM%2Fs.%20Jaysing%20Hujare!5e0!3m2!1sen!2sin!4v1570767106400!5m2!1sen!2sin" width="484" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
			</div>
		</div>
	</div>
</div>

	<?php 
 	include('footer1.php');
 ?>


</div>


</body>
</html>