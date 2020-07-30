<!-- Menu -->
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="#"><img src="img/logo.png" id="logo"></a>
    		</div>
    		<ul class="nav navbar-nav">
      			<li><a href="index.php">Home</a></li>
      			<li><a href="Catalog.php" onclick="catalog()">Catalog</a></li>
      			<li><a href="Help.php">Help</a></li>
    		</ul>

    		<ul class="nav navbar-nav navbar-right">
      			<li><a href="Signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      			<li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
    		</ul>
  		</div>
	</nav>

  <script>
    function catalog(){
      alert("Silahkan login terlebih dahulu untuk melihat Catalog");
    }
  </script>