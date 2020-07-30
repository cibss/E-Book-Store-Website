<?php



    include("koneksi.php");

    $email = $_POST["email"];
    $nama = $_POST["nama"];
    $password = $_POST["password"];
    $passwordcon = $_POST["passwordcon"];

    $sql = "INSERT INTO signup values('$email','$nama','$password','$passwordcon');";

    $query = mysqli_query($conn,$sql);
    if ($query){
        echo "<script> alert('Sign Up Berhasil');</script>";
        echo "<script>location.href='Signup.php'</script>";
    } else {
        echo "<script> alert('Sign Up Gagal');</script>";
    }

 
?>