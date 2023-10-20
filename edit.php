<!DOCTYPE html>
<html>
<head>
	<title>TOKO GROSIR ADILA</title>
</head>
<body>
 
	<h2>CRUD TOKO</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA BARANG</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tb_toko where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>KODE BARANG</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="kode_barang" value="<?php echo $d['kode_barang']; ?>">
					</td>
				</tr>
				<tr>
					<td>NAMA BARANG</td>
					<td><input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>"></td>
				</tr>
				<tr>
					<td>SATUAN BARANG</td>
					<td><input type="text" name="satuan_barang" value="<?php echo $d['satuan_barang']; ?>"></td>
				</tr>
                <tr>
					<td>STOK BARANG</td>
					<td><input type="number" name="stok_barang" value="<?php echo $d['stok_barang']; ?>"></td>
				</tr>
                <tr>
					<td>HARGA BARANG</td>
					<td><input type="number" name="harga_barang" value="<?php echo $d['harga_barang']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>