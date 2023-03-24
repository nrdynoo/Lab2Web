<!DOCTYPE html>
<html>
<head>
	<title>Form Input PHP</title>
</head>
<body>
	<h1>Form Input PHP</h1>
	<form action="" method="POST">
		<label for="nama">Nama:</label>
		<input type="text" name="Nama" required><br><br>

		<label for="tanggal_lahir">Tanggal Lahir:</label>
		<input type="date" name="Tanggal Lahir" required><br><br>

		<label for="pekerjaan">Pekerjaan:</label>
		<select name="pekerjaan">
			<option value="Programmer">Programmer</option>
			<option value="Desainer">Desainer</option>
			<option value="Pengusaha">Pengusaha</option>
		</select><br><br>

		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$pekerjaan = $_POST['pekerjaan']; }

		// Menghitung umur berdasarkan tanggal lahir
		$tgl_lahir = new DateTime($tgl_lahir);
		$sekarang = new DateTime();
		$umur = $sekarang->diff($tgl_lahir)->y;

		// Menampilkan output
		echo "<h2>Output:</h2>";
		echo "nama: $nama<br>";
		echo "tanggal lahir: $tgl_lahir<br>";
		echo "Umur: $umur tahun<br>";

		// Menampilakan gaji berdasarkan pekerjaan
		switch ($pekerjaan) {
			case 'programmer':
				$gaji = 5000000;
				break;

			case 'desainer' :
				$gaji = 4000000;
				break;

			case 'pengusaha':
				$gaji = 10000000;
				break;

			default:
			$gaji = 0;
			break;
		}
		echo "pekerjaan: $pekerjaan<br>";
		echo "Gaji Rp".number_format($gaji,0,",",".")
	."<br>";
	?>
</body>
</html>