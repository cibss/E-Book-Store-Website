<!DOCTYPE html>
<html lang="en">
<head>
	<title>Account</title>
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


	<!-- Books -->
	<div class="container">
		<div class="row">
      <div class="col-md-5">
        <?php
          include  'koneksi.php';
          $email=$_SESSION['idlogin'];
          $data = mysqli_query($conn, "SELECT * FROM signup WHERE email='$email'");
          while($akun = mysqli_fetch_array($data)){
        ?>
        <h2>My Account</h2>
        <p>Halaman ini adalah halaman akun anda, anda bisa mengubah password anda, dan membaca buku yang telah anda beli.</p>
        <br>
        <h4>Email : <?php echo $akun['email']?></h5>
        <h4>Nama : <?php echo $akun['nama']?></h5>
      </div>
      <?php
      }
      ?>
        
			<div class="col-md-7">
				<h2>Your Books</h2>
				<table id='table' class="table" border='1'>
          <thead>
            <tr>
              <th>Kode Buku</th>
              <th>Judul Buku</th>
              <th>Thumbail</th>
              <th>Aksi</th>

            </tr>
          </thead>
          <tbody>
            <?php
            include  'koneksi.php';
            $data2 = mysqli_query($conn, "SELECT * FROM kepemilikan inner join catalog on kepemilikan.kodebuku=catalog.kodebuku  where kepemilikan.email='$email'");
              while($milik= mysqli_fetch_array($data2)) {
                        echo "<tr><td>".$milik['kodebuku']."</td>";
                        echo "<td>".$milik['judul']."</td>";
                        echo "<td><img src='uploads/".$milik['cover']."' alt='' style='width:70px'</td>";
                        ?>
                          <td>
                            <a  href="uploads/<?php echo $milik['pdf']  ?>" type="application/pdf" width="100%" height="600px" /> Read </a>
                          </td>
                        <?php
     
              }
            ?>
          </tbody>
        </table>
		</div>
	</div>
</body>
</html>