<?php

	include 'koneksi.php';

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$no_hp = $_POST['no_hp'];
	$pesan = $_POST['pesan'];

	$query = "INSERT INTO contact (nama, email, no_hp, pesan) VALUES ('$nama', '$email', '$no_hp', '$pesan')";

	$hasil = mysqli_query($koneksi, $query);

	if(!$hasil){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
    } 
    else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Pesan telah dikirim. Terimakasih');window.location='contact.php';</script>";
    }

?>