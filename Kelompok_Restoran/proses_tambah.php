<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $nama   = $_POST['nama'];
  $nama_resto     = $_POST['nama_resto'];
  $kota    = $_POST['kota'];
  $kec    = $_POST['kec'];
  $kode_pos   = $_POST['kode_pos'];
  $gambar_produk = $_FILES['gambar_produk']['name'];


//cek dulu jika ada gambar produk jalankan coding ini
if($gambar_produk != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_produk); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_produk']['tmp_name']; //fungsi paling utama dalam script upload kita. Dimana fungsi inilah sebenarnya yang digunakan php untuk mengirimkan file dari komputer kita ke web server   
  $angka_acak     = rand(1,999); //untuk angka unik membedakan file
  $nama_gambar_baru = $angka_acak.'-'.$gambar_produk; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'images/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO produk (nama, nama_resto, kota, kec, kode_pos, gambar_produk) VALUES ('$nama', '$nama_resto', '$kota', '$kec', '$kode_pos', '$nama_gambar_baru')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));//digunakan untuk menampilkan nomor kode error, dan fungsi mysqli_error() digunakan untuk menampilkan pesan error yang terjadi.
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
            }//kalau gagal
} else {
   $query = "INSERT INTO produk (nama, nama_resto, kota, kec, kode_pos, gambar_produk) VALUES ('$nama', '$nama_resto', '$kota', '$kec', '$kode_pos', null)";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }//kalau berhasil
}