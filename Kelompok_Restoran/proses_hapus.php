<?php
include 'koneksi.php';
$id = $_GET["id"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM produk WHERE id='$id' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));//fungsi die sama seperti exit untuk menutup. Die lebih baik karena dapat menampilkan pesan error
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
    }