<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {
	// $id = $_POST['id_produk'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$gambar = $_POST['gambar'];
	
    $sql = "INSERT INTO data_produk (nama, harga, gambar) VALUES ('$nama','$harga', '$gambar')";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: table.php');
    }else{
        header('Location: simpandata.php?status=gagal');
    }
}
?>