<?php
	


	include("koneksi.php");

	include("randomstring.php");

	$idmsg=random_str('alphanum',10);

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$msg = $_POST['message'];

	$sql = "INSERT INTO help VALUES ('$idmsg','$nama', '$email', '$msg');";

	$query = mysqli_query($conn,$sql);
	if ($query) {
		echo "<script> alert('Pesan telah dikirim dengan kode pesan : $idmsg');</script>";
		echo "<script> location.href='Help.php'</script> ";
	} else {
		echo "<script> alert('Pesan gagal dikirim'); </script> ";
		echo "<script> location.href='Help.php'</script> ";
	}
?>