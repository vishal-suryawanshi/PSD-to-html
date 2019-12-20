<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style type="text/css">

	
	.image-lightbox {
	/* The width and height, you can change these */
	width: 250px;
	height: 166px;
	/* Float left, so everything aligns right */
	float: left;
	margin: 0 20px 0 0;
}

.image-lightbox .expand {
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	z-index: 4000;
	background: rgba(0,0,0,0); /* Fixes an IE bug */
	left: 0;
}

.image-lightbox .close {
	position: absolute;
	width: 20px; height: 20px;
	right: 20px; top: 20px;
}

div[id^=image]:target {
	width: 450px;
	height: 300px;
	z-index: 5000;
	top: 50px;
	left: 200px;
}

div[id^=image]:target .close {
	display: block;
}

div[id^=image]:target .expand {
	display: none;
}

</style>

</head>
<body>

<div id="images-box">
	<?php  
		#echo "hello <br>";
		$i=1;
		$img= glob("images/*.*");

		foreach($img as $image) 
		{
			echo '<div id="image-'.$i.'" class="image-lightbox">';
			echo '<span class="close"><a href="#">X</a></span>';
		    echo '<img class="example-image" src="'.$image.'" />';
		    echo '<a class="expand" href="#image-'.$i.'"></a>';
		    echo "</div>";
		    $i=$i+1;
		}

	?>
</div>


</body>
</html>
