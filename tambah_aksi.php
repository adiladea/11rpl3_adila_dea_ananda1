<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode = $_POST['kode_Barang'];
$nama = $_POST['nama_Barang'];
$satuan = $_POST['satuan_Barang'];
$stok = $_POST['stok_Barang'];
$harga= $_POST['harga_Barang'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_toko values('','$kode','$nama','$satuan','$stok','$harga')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>