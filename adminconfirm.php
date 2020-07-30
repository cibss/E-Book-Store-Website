<!DOCTYPE html>
<html>
<head>
	<title>Konfirmasi Pembayaran</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="E-Book_CSS.css">
<body>

 
  
	<?php 
		session_start();
		if (!isset($_SESSION['idloginadmin'])) {
		  
		   header('location:loginadmin.php');
		   }
		else {
		  include 'navadmin.php';
		  }
	?>

	<div class="container" style="margin-top: 20px">
	  <div class="col-md-12">
	    <h2>Selamat Datang Admin <?php echo ("{$_SESSION['idloginadmin']}"."<br />"); ?></h2>
	    <br><p>Halaman ini adalah halaman untuk melihat data file konfirmasi berupa foto bukti pembayaran user, jika nominal yang dibayarkan valid maka admin berhak menyetujui pesanan tersebut lalu memberikan produk yang dipesan.</p><br>
	<table id='table' class="table" border='1'>
      <thead>
        <tr>
          <th>Kode Pembayaran</th>
          <th>Email</th>
          <th>Bukti Pembayaran</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include  'koneksi.php';
        $data = mysqli_query($conn, "SELECT * FROM pembayaran ORDER BY kodepembayaran");
          while($bayar= mysqli_fetch_array($data)) {
                    echo "<tr><td>".$bayar['kodepembayaran']."</td>";
                    echo "<td>".$bayar['email']."</td>";
                    echo "<td><img src='uploads/".$bayar['bukti']."' style='width:70px'></td>";
          }
        ?>
      </tbody>
    </table>
</div>
</body>
</html>