<?php



include 'koneksi.php';
 
// Get id from URL to delete that user
$kodepemesanan = $_GET['kodepemesanan'];
$email = $_GET['email'];
$kodebuku = $_GET['kodebuku'];
$input = mysqli_query($conn, "INSERT INTO kepemilikan (id, email, kodebuku) VALUES ('$kodepemesanan','$email','$kodebuku')");

$delete = mysqli_query($conn, "DELETE FROM pesan WHERE kodepemesanan='$kodepemesanan'");
// Delete user row from table based on given id
		if ($delete & $input){
        echo "<script>alert('Data Disetujui');</script>";
		echo "<script>location.href='listpesanan.php'</script>";
      } else {
        echo "<script>alert('Data gagal untuk disetujui');</script>";
		echo "<script>location.href='listpesanan.php'</script>";		
      }




?>