<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="E-Book_CSS.css">
</head>
<body>



	<!-- Menu -->
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="#"><img src="img/logo.png" id="logo"></a>
    		</div>
    		<ul class="nav navbar-nav">
      			<li><a href="index.php">Home</a></li>
      			<li><a href="Catalog.php">Catalog</a></li>
      			<li><a href="Help.php">Help</a></li>
    		</ul>

    		<ul class="nav navbar-nav navbar-right">
      			<li><a href="Signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      			<li class="active"><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
            <li><a href="ShoppingCart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart </a></li>
    		</ul>
  		</div>
	</nav>

	<!-- Form -->
	<div class="container"> 
  		<div class="row">
    		<div class="col-lg-4"></div>
    		<div class="col-lg-4 form">
      			<div class="row">
      				<div class="col-lg-4"></div>
      				<div class="col-lg-12 warna"><b>Sign In</b></div>
    			</div>

      			<form class="ukuranform" action="prosesloginadmin.php" method="POST">
        			<div class="form-group">
          				<label for="email">Email address:</label>
          				<input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email">
        			</div>
        			<div class="form-group">
        				<label for="pwd">Password:</label>
          				<input type="password" class="form-control" id="pwd" placeholder="Masukan Password" name="password">
        			</div>
       	 			<button type="submit" class="btn btn-default" name="login">Login</button>
      			</form>

    		</div> 
  		</div>
	</div>




</body>
</html>