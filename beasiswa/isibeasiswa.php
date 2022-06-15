<?php

require './functionsBeasiswa.php';
$beasiswa = query("SELECT * FROM beasiswa");

	if(isset($_POST["urut"]) ) {
		$beasiswa = urut($_POST);
		}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar Informasi Beasiswa</h1>
	<a href="tambahbeasiswa.php">Tambah informasi beasiswa</a>
	<br><br>
	
	<br>
	<div id="container">
	 <!-- <table border="1" cellpadding="10" cellspacing="0"> -->
		<?php $i = 1; ?>
			<?php foreach($beasiswa as $row) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="ubahbeasiswa.php?id=<?php echo $row["id_beasiswa"];  ?>">ubah</a> |
				<a href="hapusbeasiswa.php?id=<?php echo $row["id_beasiswa"];  ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini ?')">hapus</a>
			</td>
			<td><img src="img/<?php echo $row["gambar_beasiswa"];  ?>"width="50"></td>
			<td><?= $row["judul_beasiswa"] ?></td>
			<td><?= $row["kategori_pendaftar"] ?></td>
			<td><?= $row["tanggal_beasiswa"] ?></td>
			<td><?= $row["deskripsi_beasiswa"] ?><td>
		</tr>
		<br>
		<?php $i++; ?>
	<?php endforeach; ?>
	</table>
	</div>
<script src="js/script.js"></script>
</body>
</html>

