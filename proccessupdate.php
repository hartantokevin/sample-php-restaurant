<?php
include "connect.php";
$kode_clothes = $_GET['kode_clothes'];
$nama_clothes = $_POST['nama_clothes'];
$harga = $_POST['harga'];
if(isset($_POST['ubah_foto'])){ 
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  $fotobaru = date('dmYHis').$foto;
  $path = "images2/".$fotobaru;
  if(move_uploaded_file($tmp, $path)){ 
    $query = "SELECT * FROM clothes_platinum WHERE kode_clothes='".$kode_clothes."'";
    $sql = mysqli_query($connect, $query); 
    $data = mysqli_fetch_array($sql); 
    if(is_file("images2/".$data['foto']))
      unlink("images2/".$data['foto']); 
    $query = "UPDATE clothes_platinum SET nama_clothes='".$nama_clothes."', harga='".$harga."', foto='".$fotobaru."' WHERE kode_clothes='".$kode_clothes."'";
    $sql = mysqli_query($connect, $query); 
    if($sql){ 
      header("location: clothes_platinum.php"); 
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
    }
  }else{
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
  }
}else{ 
  $query = "UPDATE clothes_platinum SET nama_clothes='".$nama_clothes."', harga='".$harga."' WHERE kode_clothes='".$kode_clothes."'";
  $sql = mysqli_query($connect, $query); 
  if($sql){
    header("location: clothes_platinum.php"); 
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
  }
}
?>