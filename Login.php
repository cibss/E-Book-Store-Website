
<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>Log In</title>
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

	<!-- Form -->
	<div class="container"> 
  		<div class="row">
    		<div class="col-lg-4"></div>
    		<div class="col-lg-4 form">
      			<div class="row">
      				<div class="col-lg-4"></div>
      				<div class="col-lg-12 warna"><b>Sign In</b></div>
    			</div>

      			<form class="ukuranform" action="proseslogin.php" method="POST">
        			<div class="form-group">
          				<label for="email">Email address:</label>
          				<input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email" required>
        			</div>
        			<div class="form-group">
        				<label for="pwd">Password:</label>
          				<input type="password" class="form-control" id="pwd" placeholder="Masukan Password" name="password" required>
        			</div>

              <p id="p_login">Don't have any account? click <a href="Signup.php">here!</a></p>
              <p id="p_login">Admin? click <a href="loginadmin.php">here!</a></p>
       	 			<button type="submit" class="btn btn-default" name="login">Login</button>
      			</form>

    		</div> 
  		</div>
	</div>

</body>
</html>
