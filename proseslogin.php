<?php


    
    session_start();

    include ("koneksi.php");
    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM signup WHERE email='$email' AND pass='$password'; ";

        $query = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($query);
         if ($count==1) {
            $_SESSION['idlogin'] = $email;
            echo "<script>alert('Login Berhasil');</script>";
            echo "<script>location.href='Account.php'</script>";
        } else {
            echo "<script>alert('Login gagal');</script>";
            echo "<script>location.href='Login.php'</script>";
        } 
    }
?>