<!DOCTYPE html>
<html lang="en">
<head>
	<title>Catalog</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="jquery-3.3.1.min"></script>
    <link rel="stylesheet" type="text/css" href="E-Book_CSS.css">

  	<script>



  		// Show All
  		$(document).ready(function(){
  			$("#all").click(function(){
  				$(".cfb").show();
  				$(".fanb").show();
  				$(".mysb").show();
  				$(".romb").show();
  				$(".scib").show();
  			})
  		})

  		// Show Children's Fiction
  		$(document).ready(function(){
  			$(".cf").click(function(){
  				$(".cfb").show();
  				$(".fanb").hide();
  				$(".mysb").hide();
  				$(".romb").hide();
  				$(".scib").hide();
  			})
  		})

  		//Show Fantasy
  		$(document).ready(function(){
  			$(".fan").click(function(){
  				$(".cfb").hide();
  				$(".fanb").show();
  				$(".mysb").hide();
  				$(".romb").hide();
  				$(".scib").hide();
  			})
  		})

  		//Show Mystery
  		$(document).ready(function(){
  			$(".mys").click(function(){
  				$(".cfb").hide();
  				$(".fanb").hide();
  				$(".mysb").show();
  				$(".romb").hide();
  				$(".scib").hide();
  			})
  		})

  		//Show Romance
  		$(document).ready(function(){
  			$(".rom").click(function(){
  				$(".cfb").hide();
  				$(".fanb").hide();
  				$(".mysb").hide();
  				$(".romb").show();
  				$(".scib").hide();
  			})
  		})

  		//Show Science Fiction
  		$(document).ready(function(){
  			$(".sci").click(function(){
  				$(".cfb").hide();
  				$(".fanb").hide();
  				$(".mysb").hide();
  				$(".romb").hide();
  				$(".scib").show();
  			})
  		})
		
  	</script>
 
</head>
<body>



	<?php 
session_start();

if (!isset($_SESSION['idlogin'])) {
  
   header('location:Login.php');
   }
else {
  include 'navafter.php';
  }
?>

	<!-- Content -->
	<div class="container">
		<div class="row">
			<div class="col-md-4"><h2>Category</h2>
				<ul class="nav nav-pills nav-stacked" role="tablist" >
					<li id="all"><a href="#">All Books</a></li>
    				<li class="cf"><a href="#">Children's Fiction</a></li>
    				<li class="fan"><a href="#">Fantasy</a></li>
    				<li class="mys"><a href="#">Mystery</a></li>
    				<li class="rom"><a href="#">Romance</a></li>        
    				<li class="sci"><a href="#">Science Fiction</a></li>   
  				</ul>
			</div>
        
    		  <div class="col-md-8"><h2>Books</h2>
    			 <div class="row">


            
            <?php 
              include  'koneksi.php';
              $data = mysqli_query($conn, "SELECT * FROM catalog ORDER BY kodebuku");
                while($buku = mysqli_fetch_array($data)) {
                  ?>
                  
                    <div class="<?php echo $buku['kategori'] ?>">
                      <center>
                        <img src="uploads/<?php echo $buku['cover'] ?>" style="height:200px; width: 150px">
                        <h4><?php echo $buku['judul'] ?></h4>
                        <h5>Rp.<?php echo $buku['harga'] ?></h5>
                        <a href="pesan.php?email=<?php echo $_SESSION['idlogin'] ?>&kodebuku=<?php echo $buku['kodebuku'] ?>" class="btn" name="buy" type="buy">Buy</a>
                      </center>
                    </div>

                  <?php
                }
            ?>
      </div>
				  </div>
    		</div>

		</div>
	</div>

</body>
</html>