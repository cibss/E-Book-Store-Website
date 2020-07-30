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
   <br><p>Admin dapat mengontrol user seperti mengedit dan menghapus user, namun tidak dapat menambah user karena user bisa mendaftarkan diri sendiri. </p><br>
   <table id='table' class="table" border='1'>
    <thead>
      <tr>
        <th>Email</th>
        <th>Nama</th>
        <th>Password</th>
        <th>Aksi</th>

      </tr>
    </thead>
    <tbody>
      <?php
      include  'koneksi.php';
      $data = mysqli_query($conn, "SELECT * FROM signup ORDER BY email");
      while($user= mysqli_fetch_array($data)) {
        echo "<tr><td>".$user['email']."</td>";
        echo "<td>".$user['nama']."</td>";
        echo "<td>".$user['pass']."</td>";
        ?>
        <td>
          <button class="btn btn-primary glyphicon glyphicon-pencil" data-target="#update" data-toggle="modal"></button> 
          <a href="deleteuser.php?email=<?php echo $user['email'] ?>" class="btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('Apakah yakin akan menghapus data ini?')"></a> 
          
        </td>
        <div id="update" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"></button>
                <h3 class="modal-title">Edit Data User : <?php echo $user['nama']?></h4>
                </div>

                <form method="post" action="updateuser.php" enctype="multipart/form-data" >
                  <div class="form-group" style="padding: 5px">
                    <input type="text" class="form-control" id="email"  name="email"  value="<?php echo $user['email']  ?>" readonly>
                  </div>
                  <div class="form-group" style="padding: 5px">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $user['nama']  ?>" placeholder="NAMA" required>
                  </div>
                  <div class="form-group" style="padding: 5px">
                    <input type="number" class="form-control" id="pass" name="pass" value="<?php echo $user['pass']  ?>" placeholder="PASSWORD" required>
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
</body>
</html>