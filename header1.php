<!DOCTYPE html>
<html>
<head>
<title>header</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <link rel="stylesheet" type="text/css" href="lightbox\lightbox.min.css">
</head>
<body>
<header class="img">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-12 col-xs-12">
<img class="logo" src="images/logo.png">
</div>
<div class="col-md-8">
<div class="row">
<div class="social col-md-2">
          <span>Follow us:</span>
           <a href="#"><img src="images/facebook.png"></a>
           <a href="#"><img src="images/google.png"></a>
       </div>
</div>
<div class="row" style="margin-top: 30px;">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <nav class="main-header">
         <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
             <span class="icon-bar" style="background-color: white;"></span>
             <span class="icon-bar" style="background-color: white;"></span>
             <span class="icon-bar" style="background-color: white;"></span>
           </button>
           </div>

           <div class="collapse navbar-collapse" id="myNavbar">
               <ul class="nav navbar-nav ccc">
                 <li><a class="a1
                  <?php if(basename($_SERVER['PHP_SELF'])=="index.php"){echo "active";} ?>" href="index.php">Home</a></li>
                 <li><a href="new_deals.php" class=" a1
                  <?php if(basename($_SERVER['PHP_SELF'])=="new_deals.php"){echo "active";}  ?>">New Deals</a></li>
                 <li><a href="currentproject.php" class="a1
                  <?php if (basename($_SERVER['PHP_SELF'])=="currentproject.php"){echo "active";} ?> ">Current Projects</a></li>
                 <li><a href="completedproject.php" class="a1
                 <?php if(basename($_SERVER['PHP_SELF'])=="completedproject.php"){echo "active";} ?> ">Completed Projects</a></li>
                 <li><a href="contactus.php" class="a1
                  <?php if(basename($_SERVER['PHP_SELF'])=="contactus.php"){echo "active";} ?>">Contact Us</a></li>
                 <li><a href="aboutus.php" class="a1
                  <?php if(basename($_SERVER['PHP_SELF'])=="aboutus.php"){echo "active";} else?>">About Us</a></li>
               </ul>
           </div>
       </nav>
    </div>
</div>
</div>
</div>
</div>
</header>

</body>
</html>
