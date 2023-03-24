<!DOCTYPE html>
<html>
<head>
	<title>Form Input PHP</title>
</head>
<body>
	<h1>Form Input PHP</h1>
	<form action="" method="POST">
		<label for="nama">Nama:</label>
		<input type="text" name="NURDIYONO" required><br><br>

		<label for="tgl_lahir">Tanggal Lahir:</label>
		<input type="date" name="12_APRIL_1999" required><br><br>

		<label for="pekerjaan">Pekerjaan:</label>
		<select name="MAHASISWA">
			<option value="Programmer">Programmer</option>
			<option value="Desainer">Desainer</option>
			<option value="Pengusaha">Pengusaha</option>
		</select><br><br>

		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	if (isset($_POST['submit']))
		$nama = $_POST['nama'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$pekerjaan = $_POST['pekerjaan'];

		// Menghitung umur berdasarkan tanggal lahir
		$tanggal_lahir = new DateTime($tgl_lahir);
		$sekarang = new DateTime();
		$umur = $sekarang->diff($tanggal_lahir)->y;

		// Menampilkan output
		echo "<h2>Output:</h2>";
		echo "Nama: $nam