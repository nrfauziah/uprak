<?php
include 'koneksi.php';
$nama = $_GET["nama"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $sql = "DELETE FROM `data_produk` WHERE nama='$nama'";
    $query = mysqli_query($connect, $sql);

    //periksa query, apakah ada kesalahan
    if(!$query) {
        die ("Gagal menghapus data: ".mysqli_errno($connect).
        " - ".mysqli_error($connect));
    } else {
        echo "<script>alert('Data berhasil dihapus.');window.location='table.php';</script>";
    }