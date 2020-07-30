<!DOCTYPE html>
<html lang="en">
<head>
	<title>Help</title>
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

	<div class="container"> 
  		<div class="row">
    		<div class="col-lg-4"></div>
    		<div class="col-lg-4 form">
      			<div class="row">
      				<div class="col-lg-4"></div>
      				<div class="col-lg-12 warna"><b>Leave us a message</b></div>
    			</div>
      			<form class="ukuranform" name="datahelp" method="POST" action="postdatahelp.php">
        			<div class="form-group">
          				<label for="name">Name :</label>
          				<input type="text" class="form-control" id="name" name="nama">
        			</div>
        			<div class="form-group">
        				<label for="email">Email Address:</label>
          				<input type="email" class="form-control" id="email" name="email">
        			</div>
        			<div class="form-group">
        				<label for="message">How can we help you?</label>
        				<textarea class="form-control" rows="5" id="comment" name="message"></textarea>
        			</div>
       	 			<button type="submit" class="btn btn-default" name="send">Send</button>
      			</form>

    		</div>
  		</div>
	</div>
</body>
</html>