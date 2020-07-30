<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
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
    <br><p>Admin dapat menambahkan stok buku ke database. Silahkan klik Tambah Buku untuk menambahkan buku, klik icon edit untuk mengedit data dan klik icon hapus untuk menghapus data pada Aksi</p><br>
    <h4>Table Database Buku</h4>
    <button class="btn btn-primary glyphicons glyphicons-plus" data-target="#insert" data-toggle="modal">Tambah Buku</button>
      <div id="insert" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"></button> 
                <h3 class="modal-title">Tambah Data Buku</h4> 
            </div>

              <form method="post" action="inputbuku.php" enctype="multipart/form-data">
                <div class="form-group" style="padding: 5px">
                  <input type="text" class="form-control" id="kode"  name="kode"  placeholder="Kode Buku" required>
                </div>
                <div class="form-group" style="padding: 5px">
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Judul" required>
                </div>
                <div class="form-group" style="padding: 5px">
                  <label>Kategori  </label><br>
                  <input type="radio" name="kategori" value="cfb" checked> Children's Fiction<br>
                  <input type="radio" name="kategori" value="scib"> Science Fiction<br>
                  <input type="radio" name="kategori" value="fanb"> Fantasy <br>
                  <input type="radio" name="kategori" value="mysb"> Mystery <br>
                  <input type="radio" name="kategori" value="romb"> Romance <br>

                </div>
                <div class="form-group" style="padding: 5px">
                  <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga" required>
                </div>
                <div class="form-group" style="padding: 5px">
                  <label>Upload Cover</label>
                  <input type="file" id="file" name="foto" size="20" >
                </div>
                <div class="form-group" style="padding: 5px">
                    <label>Upload PDF</label>
                    <input type="file" id="file" name="pdf" size="10000" >
                </div>
                <center>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </center>
             </form>
             
             </div>
            </div>
          </div>


    <table id='table' class="table" border='1'>
      <thead>
        <tr>
          <th>Kode Buku</th>
          <th>Judul Buku</th>
          <th>Kategori</th>
          <th>Harga</th>
          <th>Thumbail</th>
          <th>PDF</th>
          <th>Aksi</th>

        </tr>
      </thead>
      <tbody>
        <?php
        include  'koneksi.php';
        $data = mysqli_query($conn, "SELECT * FROM catalog ORDER BY kodebuku");
          while($buku = mysqli_fetch_array($data)) {
                    echo "<tr><td>".$buku['kodebuku']."</td>";
                    echo "<td>".$buku['judul']."</td>";
                    echo "<td>".$buku['kategori']."</td>";
                    echo "<td>".$buku['harga']."</td>";
                    echo "<td><img src='uploads/".$buku['cover']."' alt='' style='width:70px'></td>";
                    echo "<td>".$buku['pdf']."</td>";
                    ?>
                    <td>
                      <button class="btn btn-primary glyphicon glyphicon-pencil" data-target="#update" data-toggle="modal"></button> 
                      
                      <a href="deletebuku.php?kodebuku=<?php echo $buku['kodebuku'] ?>" class="btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('Apakah yakin akan menghapus data ini?')"></a> 
                  
                    </td>
                    

                    <div id="update" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"></button>
                            <h3 class="modal-title">Edit Data Buku : <?php echo $buku['judul']?></h4>
                          </div>

                          <form method="post" action="updatebuku.php" enctype="multipart/form-data" >
                            <div class="form-group" style="padding: 5px">
                              <input type="text" class="form-control" id="kode"  name="kode"  value="<?php echo $buku['kodebuku']  ?>" readonly>
                            </div>
                            <div class="form-group" style="padding: 5px">
                              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $buku['judul']  ?>" placeholder="JUDUL BUKU" required>
                            </div>
                            <div class="form-group" style="padding: 5px">
                              <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $buku['harga']  ?>" placeholder="HARGA BUKU" required>
                            </div>
                            <button type="submit" name="submit1" class="btn btn-primary" >Submit</button>
                         </form>
                        </div>
                      </div>
                    </div>
                    <?php
 
          }
        ?>
      </tbody>
    </table>
    
  </div>
</div>
</div>



</body>
</html>
