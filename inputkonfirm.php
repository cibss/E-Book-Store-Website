<?php


	
	session_start();
	include("koneksi.php");

	include("randomstring.php");

	$kodepembayaran=random_str('alphanum',10);


	$email = $_SESSION['idlogin'];
	$targetDir = "bukti/";
  	$fileName = basename($_FILES["bukti"]["name"]);
  	$targetFilePath = $targetDir . $fileName;
  	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  	if(!empty($_FILES["bukti"]["name"])){
  		$allowTypes = array('jpg','png','jpeg','gif','pdf');
  		if(in_array($fileType, $allowTypes)){
  			if(move_uploaded_file($_FILES["bukti"]["tmp_name"], $targetFilePath)){
  				$sql = "INSERT INTO pembayaran VALUES('$kodepembayaran','$email', '".$fileName."');";
				$query = mysqli_query($conn,$sql);
					if ($query) {
						echo "<script> alert('Konfirmasi pembayaran telah dikirim dengan kode pembayaran : $kodepembayaran');</script>";
						echo "<script> location.href='ShoppingCart.php'</script> ";
					} else {
						echo "<script> alert('Konfirmasi Gagal'); </script> ";
						echo "<script> location.href='ShoppingCart.php'</script> ";
					}
  			}
  		}
  	}
	


?>