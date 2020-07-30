<?php



include 'koneksi.php';
 
// Get id from URL to delete that user
$idmsg = $_GET['idmsg'];
$result = mysqli_query($conn, "DELETE FROM help WHERE idmsg='$idmsg'");
// Delete user row from table based on given id
		if ($result){
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>location.href='adminhelp.php'</script>";
      } else {
        echo "<script>alert('Data gagal dihapus');</script>";
        echo "<script>location.href='adminhelp.php'</script>";
      }
?>