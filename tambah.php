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
	<h3>TAMBAH BARANG</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Kode Barang</td>
				<td><input type="text" name="kode_Barang"></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama_Barang"></td>
			</tr>
			<tr>
				<td>Satuan Barang</td>
				<td><input type="text" name="satuan_Barang"></td>
			</tr>
            <tr>
				<td>Stok Barang</td>
				<td><input type="number" name="stok_Barang"></td>
			</tr>
            <tr>
				<td>Harga Barang</td>
				<td><input type="number" name="harga_Barang"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>
