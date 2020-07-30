<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shopping Cart</title>
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
  
   header('location:Login.php');
   }
else {
  include 'navafter.php';
  }
?>
  
	<!-- Shopping Cart -->
	<div class="container">
		<div class="col-md-12"><h2><span class="glyphicon glyphicon-shopping-cart"></span>Shopping Cart</h2>
    			<div class="row">
  					<div class="column">
  						<table class="table table-condensed">
						    <thead>
						      <tr>
						        <th>Kode Pemesanan</th>
						        <th>Kode Buku : Judul Buku</th>
						        <th>Subtotal</th>
						        <th>Aksi</th>
						      </tr>
						    </thead>
						    <tbody>
						      <?php
						        include  'koneksi.php';
						        $x=0;
						        $mail=$_SESSION['idlogin'];
						        $data = mysqli_query($conn, "SELECT * FROM pesan join catalog on pesan.kodebuku=catalog.kodebuku WHERE email='$mail'");
						          while($pesan= mysqli_fetch_array($data)) {
						          			
						                    echo "<tr><td>".$pesan['kodepemesanan']."</td>";
						                    echo "<td>".$pesan['kodebuku']." : ".$pesan['judul']."</td>";
						                    echo "<td>".$pesan['harga']."</td>";
						                    $x +=$pesan['harga'];
						                    ?>
						                    <td>
						                    	<a href="deletepesanan.php?kodepemesanan=<?php echo $pesan['kodepemesanan'] ?>" class="btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('Apakah yakin akan menghapus buku ini?')"></a> 

						                    </td>
						                    
						                    <?php
						 
						          }
						        ?>
						    </tbody>
						</table>
						<div class="col-md-4"></div>
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<?php
								
								
							?>
  							<p>Total Belanja : </p> <?php echo $x?>
						</div>
						<br>
						<br>

						<div class="col-md-2"></div>
						<div class="col-md-8" style="background-color: #d3d3d3; border-radius: 10px; padding-bottom: 20px; padding-top: 20px;">
  							<p style="padding:10px; ">E-book yang sudah anda masukan ke keranjang belanja mohon dibayarkan sebelum 1x24 jam, pembayaran dilakukan ke rekening dibawah ini.</p>
  							<center style="font-size: 16px;">
  								<p><b>No. Rek : 1310013867447</b></p>
  								<p><b>Atas Nama : Fuad Zauqi Nur</b></p>
  								<p><b>Bank : Mandiri</b></p>
  							</center>
  							<p>Setelah melakukan pembayaran, anda dianjurkan untuk konfirmasi pembayaran dengan upload bukti pembayaran dibawah.</p>
  							<form method="post" action="inputkonfirm.php" enctype="multipart/form-data">
  							<input type="file" name="bukti" id="bukti">
  							<br>
  							<p>Setelah selesai melakukan konfirmasi pembayaran, E-book yang dibayar akan segera dimasukan kedalam akun anda dalam waktu 1x24 jam.</p>
  						</div>

  					</div>

  				</div>
  			<br>
  			<center>
	  			<button type="submit" class="btn">Konfirmasi Pembayaran</button>
	  		</form>
  			</center>
  			<br>
  				
  		</div>		
  	</div>
</body>
</html>