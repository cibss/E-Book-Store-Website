<?php



include 'koneksi.php';
 
// Get id from URL to delete that user
$kodebuku = $_GET['kodebuku'];
$result = mysqli_query($conn, "DELETE FROM catalog WHERE kodebuku='$kodebuku'");
// Delete user row from table based on given id
		if ($result){
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>location.href='admin.php'</script>";
      } else {
        echo "<script>alert('Data gagal dihapus');</script>";
        echo "<script>location.href='admin.php'</script>";
      }




?>