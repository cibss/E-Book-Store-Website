<!DOCTYPE html>
<html>
<head>
	<title>Admin Help Viewer</title>
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
	    <br><p>Peran Admin yaitu melihat permintaan pertolongan, apapun isinya Admin akan menolong jika isinya pertolongan dan mempertimbangkan jika isinya saran. Admin dapat melihat permintaan pertolongan pengunjung yang telah mengisi pada page Help. Klik icon hapus untuk menghapus data help. </p><br>
	<table id='table' class="table" border='1'>
      <thead>
        <tr>
          <th>Kode Pesan</th>
          <th>Nama Pengirim</th>
          <th>Email</th>
          <th>Pesan</th>
          <th>Aksi</th>

        </tr>
      </thead>
      <tbody>
        <?php
        include  'koneksi.php';
        $data = mysqli_query($conn, "SELECT * FROM help ORDER BY idmsg");
          while($msg= mysqli_fetch_array($data)) {
                    echo "<tr><td>".$msg['idmsg']."</td>";
                    echo "<td>".$msg['nama']."</td>";
                    echo "<td>".$msg['email']."</td>";
                    echo "<td>".$msg['message']."</td>";
                    ?>
                    <td>
                      
                      <a href="deletehelp.php?idmsg=<?php echo $msg['idmsg'] ?>" class="btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('Apakah yakin akan menghapus data ini?')"></a> 
                  
                    </td>
                    
                    <?php
 
          }
        ?>
      </tbody>
    </table>
</div>
</body>
</html>