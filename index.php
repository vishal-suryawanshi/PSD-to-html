<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="images/style.css" />

	 <link rel="stylesheet" href="lightbox.min.css">

</head>

<script src="lightbox.js"></script>
<body>

<div id="images-box">
	<?php  
		#echo "hello <br>";
		$i=1;
		$img= glob("images/*.jfif");

		foreach($img as $image) 
		{
		    echo '<centre><a href="'.$image.'" data-lightbox="example-'.$i.'"><img class="i1" src="'.$image.'"></a><centre>';
		    if($i%2==0)
		    	echo "<br>";
		 	$i=$i+1;   
		}

	?>
</div>

<script src="lightbox-plus-jquery.min.js"></script>

</body>
</html>
