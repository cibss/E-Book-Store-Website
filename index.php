<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="E-Book_CSS.css">

</head>
<body>



<?php 
session_start();

if (!isset($_SESSION['idlogin'])) {
  
   include 'navbefore.php';
   }
else {
  include 'navafter.php';
  }
?>

	<!-- Carousel -->
	<div class="container">
  		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    		
    		<ol class="carousel-indicators">
      			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      			<li data-target="#myCarousel" data-slide-to="1"></li>
      			<li data-target="#myCarousel" data-slide-to="2"></li>
    		</ol>

    		
    		<div class="carousel-inner">
      			<div class="item active">
        			<img src="img/c1.jpg" class="crsl">
      			</div>
      			<div class="item">
        			<img src="img/c2.jpg" class="crsl">
      			</div> 
      			<div class="item">
        			<img src="img/c3.jpg" class="crsl">
      			</div>
    		</div>

    	
    		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
      			<span class="glyphicon glyphicon-chevron-left"></span>
      			<span class="sr-only">Previous</span>
    		</a>
    		<a class="right carousel-control" href="#myCarousel" data-slide="next">
      			<span class="glyphicon glyphicon-chevron-right"></span>
      			<span class="sr-only">Next</span>
    		</a>
  		</div>
	</div>
	
	<!-- Popular  -->
	<div class="container">
		<h3> Popular This Week</h3>
		<div class="row">
			<div class="col-md-6">
				<p id="teks">
        In the ruins of a place once known as North America lies the nation of Panem, a shining Capitol surrounded by twelve outlying districts. The Capitol is harsh and cruel and keeps the districts in line by forcing them all to send one boy and one girl between the ages of twelve and eighteen to participate in the annual Hunger Games, a fight to the death on live TV. Sixteen-year-old Katniss Everdeen, who lives alone with her mother and younger sister, regards it as a death sentence when she is forced to represent her district in the Games. But Katniss has been close to dead before - and survival, for her, is second nature. Without really meaning to, she becomes a contender. But if she is to win, she will have to start making choices that weigh survival against humanity and life against love.</p>
			</div>

			<div class="col-md-6">
				<center>
            <img src="img/cat-img/hunger.jpg" id="hunger">     
          </a>
				</center>
			</div>
		</div>
	</div>
	
	<!-- Footer -->
  	<center>
  		<footer>© 2018 E-Book Store</footer>
  	</center> 
	

  	
</body>
</html>