<?php



  include 'koneksi.php';
  $statusMsg = '';

  $kode = $_REQUEST['kode'];
  $nama = $_REQUEST['nama'];
  $harga = $_REQUEST['harga'];
  $kategori= $_REQUEST['kategori'];


  $targetDir = "uploads/";
  $fileName = basename($_FILES["foto"]["name"]);
  $pdfName = basename($_FILES["pdf"]["name"]);
  $targetFilePath = $targetDir . $fileName;
  $targetPdfPath = $targetDir . $pdfName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  $pdfType = pathinfo($targetPdfPath,PATHINFO_EXTENSION);

  if(isset($_POST["submit"]) && !empty($_FILES["foto"]["name"] )){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFilePath) && move_uploaded_file($_FILES["pdf"]["tmp_name"], $targetPdfPath)){
            // Insert image file name into database
            $mysqli ="INSERT INTO catalog (kodebuku, judul, kategori, harga, cover, pdf) VALUES ('$kode', '$nama', '$kategori' , '$harga','".$fileName."', '".$pdfName."')";
            $insert = mysqli_query($conn, $mysqli);
            if($insert){
                $statusMsg = "Buku telah ditambahkan.";
            }else{
                $statusMsg = "Gagal menambahkan Buku, Silahkan coba lagi.";
            } 
        }else{
            $statusMsg = "Maaf, Ada yang error pada file anda.";
        }
    }else{
        $statusMsg = 'Maaf, Hanya JPG, JPEG, PNG, GIF, & PDF files yang diperbolehkan diupload.';
    }
}else{
    $statusMsg = 'Pilih file untuk diupload.';
}

// Display status message
echo "<script>alert('".$statusMsg."');</script>";
echo "<script>location.href='admin.php'</script>";

  //$mysqli = "INSERT INTO buku (kodebuku, judul, harga, cover, pdf) VALUES ('$kode', '$nama', '$harga','$foto','$pdf')";
  //$result = mysqli_query($conn, $mysqli);






?>
