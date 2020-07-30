<!DOCTYPE html>
<html>
<head>
	<title>Pesanan User</title>
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
	    <br><p>Admin dapat melihat pesanan, menghapus pesanan, dan dapat menyetujui pesanan lalu memindahkan data pada pesanan ke tabel kepemilikan jika user telah menyelesaikan pembayaran. </p><br>
	<h4>Tabel Pesanan</h4>
  <table id='table' class="table" border='1'>
      <thead>
        <tr>
          <th>Kode Pemesanan</th>
          <th>User </th>
          <th>Buku Dipesan</th>
          <th>Aksi</th>

        </tr>
      </thead>
      <tbody>
        <?php
        include  'koneksi.php';
        $data = mysqli_query($conn, "SELECT * FROM pesan ORDER BY kodepemesanan");
          while($pesan= mysqli_fetch_array($data)) {
                    echo "<tr><td>".$pesan['kodepemesanan']."</td>";
                    echo "<td>".$pesan['email']."</td>";
                    echo "<td>".$pesan['kodebuku']."</td>";
                    ?>
                    <td>
                      <a href="setujuipesanan.php?kodepemesanan=<?php echo $pesan['kodepemesanan'] ?>&email=<?php echo $pesan['email'] ?>&kodebuku=<?php echo $pesan['kodebuku'] ?>" class="btn btn-primary glyphicon glyphicon-plus" onclick="return confirm('Apakah yakin akan menyetujui pesanan ini?')"></a> 
                      <a href="deletepesanan.php?kodepemesanan=<?php echo $pesan['kodepemesanan'] ?>" class="btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('Apakah yakin akan menghapus data ini?')"></a> 
                  
                    </td>
                    
                    <?php
 
          }
        ?>
      </tbody>
    </table>
    <br>


    
    <h4>Tabel Kepemilikan Buku</h4>
    <table id='table' class="table" border='1'>
      <thead>
        <tr>
          <th>Kode Kepemilikan</th>
          <th>User </th>
          <th>Buku Dimiliki</th>

        </tr>
      </thead>
      <tbody>
        <?php
        include  'koneksi.php';
        $data = mysqli_query($conn, "SELECT * FROM kepemilikan ORDER BY id");
          while($milik= mysqli_fetch_array($data)) {
                    echo "<tr><td>".$milik['id']."</td>";
                    echo "<td>".$milik['email']."</td>";
                    echo "<td>".$milik['kodebuku']."</td>";
                    ?>
                    
                    <?php
 
          }
        ?>
      </tbody>
    </table>
</div>
</body>
</html>