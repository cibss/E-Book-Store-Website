<?php
  
  include 'koneksi.php';
  $statusMsg = '';

  $email = $_REQUEST['email'];
  $nama = $_REQUEST['nama'];
  $pass = $_REQUEST['pass'];


  if(isset($_POST["submit1"])){
            $mysqli ="UPDATE signup SET nama='$nama', pass='$pass'  WHERE email='$email'";
            $insert = mysqli_query($conn, $mysqli);
            if($insert){
                $statusMsg = "Data User Telah Diubah.";
            }else{
                $statusMsg = "Gagal mengubah data User, Silahkan coba lagi.";
            }
}

// Display status message
echo "<script>alert('".$statusMsg."');</script>";
echo "<script>location.href='admin.php'</script>";
?>