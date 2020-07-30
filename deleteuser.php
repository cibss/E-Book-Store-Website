<?php


include 'koneksi.php';
 
// Get id from URL to delete that user
$email = $_GET['email'];
$result = mysqli_query($conn, "DELETE FROM signup WHERE email='$email'");
// Delete user row from table based on given id
		if ($result){
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>location.href='useradmin.php'</script>";
      } else {
        echo "<script>alert('Data gagal dihapus');</script>";
        echo "<script>location.href='useradmin.php'</script>";
      }




?>