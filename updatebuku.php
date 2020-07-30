<?php


  include 'koneksi.php';
  $statusMsg = '';

  $kode = $_REQUEST['kode'];
  $nama = $_REQUEST['nama'];
  $harga = $_REQUEST['harga'];


  if(isset($_POST["submit1"])){
            $mysqli ="UPDATE catalog SET judul='$nama', harga='$harga'  WHERE kodebuku='$kode'";
            $insert = mysqli_query($conn, $mysqli);
            if($insert){
                $statusMsg = "Data Buku Telah Diubah.";
            }else{
                $statusMsg = "Gagal mengubah data Buku, Silahkan coba lagi.";
            }
}

// Display status message
echo "<script>alert('".$statusMsg."');</script>";
echo "<script>location.href='admin.php'</script>";

  //$mysqli = "INSERT INTO buku (kodebuku, judul, harga, cover, pdf) VALUES ('$kode', '$nama', '$harga','$foto','$pdf')";
  //$result = mysqli_query($conn, $mysqli);






?>