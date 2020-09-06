<?php

	include 'koneksi.php';

	$nama = $_POST['nama'];
	$nama_resto = $_POST['nama_resto'];
	$kota = $_POST['kota'];
	$kec = $_POST['kec'];
	$kode_pos = $_POST['kode_pos'];

	$query = "INSERT INTO register (nama, nama_resto, kota, kec, kode_pos) VALUES ('$nama', '$nama_resto', '$kota', '$kec', '$kode_pos')";

	$hasil = mysqli_query($koneksi, $query);

	if(!$hasil){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
    } 
    else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Informasi berhasil dikirim. Silahkan tunggu admin untuk menambahkan data Anda');window.location='register.php';</script>";
    }

?>