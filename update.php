<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$kode = $_POST['kode_Barang'];
$nama = $_POST['nama_Barang'];
$satuan = $_POST['satuan_Barang'];
$stok = $_POST['stok_Barang'];
$harga= $_POST['harga_Barang'];
 
mysqli_query($koneksi,"UPDATE tb_toko SET kode_Barang='$kode',nama_Barang='$nama',satuan_Barang='$satuan',stok_Barang='$stok',harga_Barang='$harga' WHERE id='$id'");
 

 
header("location:index.php?pesan=update");
?>