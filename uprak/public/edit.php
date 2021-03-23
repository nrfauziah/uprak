<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];

    $sql = "UPDATE data_produk SET nama='$nama', harga='$harga', gambar='$gambar' WHERE nama='$nama'";
    $query =mysqli_query($connect,$sql);
    if ($query) {
        header('Location: table.php');
    }else{
        header('location: edit.php?status=gagal');
    }
}
?>