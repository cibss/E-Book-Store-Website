<?php


  
  include 'koneksi.php';
  include("randomstring.php");

  
  $kodepemesanan = random_str('alphanum',8);
  $email = $_REQUEST['email'];
  $kodebuku = $_REQUEST['kodebuku'];

  $statusMsg = ''; 
  $mysqli ="INSERT INTO pesan (kodepemesanan, email, kodebuku) VALUES ('$kodepemesanan','$email','$kodebuku')";
  $insert = mysqli_query($conn, $mysqli);
  if($insert){
    $statusMsg = "Buku berhasil dipesan, telah ditambahkan ke Shoping Cart.";
  }else{
    $statusMsg = "Gagal membeli Buku, Silahkan coba lagi.";
  }


// Display status message
echo "<script>alert('".$statusMsg."');</script>";
echo "<script>location.href='Catalog.php'</script>";