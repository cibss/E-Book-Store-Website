<?php



include 'koneksi.php';
 
// Get id from URL to delete that user
$kodepemesanan = $_GET['kodepemesanan'];
$result = mysqli_query($conn, "DELETE FROM pesan WHERE kodepemesanan='$kodepemesanan'");
// Delete user row from table based on given id
		if ($result){
        echo "<script>alert('Data berhasil dihapus');</script>";
        session_start();
		if (!isset($_SESSION['idloginadmin'])) {
			echo "<script>location.href='ShoppingCart.php'</script>";
		   }
		else {
			echo "<script>location.href='listpesanan.php'</script>";
 		}
        echo "<script>location.href='admin.php'</script>";
      } else {
        echo "<script>alert('Data gagal dihapus');</script>";
        if (!isset($_SESSION['idloginadmin'])) {
			echo "<script>location.href='ShoppingCart.php'</script>";
		   }
		else {
			echo "<script>location.href='listpesanan.php'</script>";
 		}
      }




?>