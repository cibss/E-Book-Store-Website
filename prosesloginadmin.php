<?php


    
    session_start();

    include ("koneksi.php");
    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM admin WHERE email='$email' AND pass='$password'; ";

        $query = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($query);
         if ($count==1) {
            $_SESSION['idloginadmin'] = $email;
            echo "<script>alert('Login Berhasil');</script>";
            echo "<script>location.href='admin.php'</script>";
        } else {
            echo "<script>alert('Login gagal');</script>";
            echo "<script>location.href='loginadmin.php'</script>";
        } 
    }
?>