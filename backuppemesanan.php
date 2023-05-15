<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan Produk</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container2">
		<h1>Pemesanan Produk</h1>
		<form action="process.php" method="POST">
			<label for="no">Nomor Pemesanan:</label>
			<input type="text" name="no" required>

			<label for="tanggal">Tanggal Pemesanan:</label>
			<input type="date" name="tanggal" required>

			<label for="nama">Nama:</label>
			<input type="text" name="nama" required>

			<label for="alamat">Alamat:</label>
			<textarea name="alamat" required></textarea>

			<label for="no_hp">Nomor HP:</label>
			<input type="tel" name="no_hp" required>

			<label for="email">Email:</label>
			<input type="email" name="email" required>

			<label for="jumlah_pesanan">Jumlah Pesanan:</label>
			<input type="number" name="jumlah_pesanan" required>

			<label for="deskripsi">Deskripsi Produk:</label>
			<textarea name="deskripsi" required></textarea>

			<label for="id_produk">ID Produk:</label>
			<input type="text" name="id_produk" required>

			<button type="submit" name="submit">Pesan</button>
		</form>
	</div>
</body>
</html>
