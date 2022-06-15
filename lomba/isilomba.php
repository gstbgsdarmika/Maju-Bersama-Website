<?php
require '../functionsLomba.php';
$lomba = query("SELECT * FROM lomba");

	if(isset($_POST["urut"]) ) {
		$lomba = urut($_POST);
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
	<h1>Daftar Informasi Lomba</h1>
	<a href="tambah.php">Tambah informasi lomba</a>
	<br><br>

	<br>
	<div id="container">
	<!-- <table border="1" cellpadding="10" cellspacing="0"> -->
		<?php $i = 1; ?>
			<?php foreach($lomba as $row) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="ubah.php?id=<?php echo $row["id_lomba"];  ?>">ubah</a> |
				<a href="hapus.php?id=<?php echo $row["id_lomba"];  ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini ?')">hapus</a>
			</td>
			<td><img src="img/<?php echo $row["gambar_lomba"];  ?>"width="50"></td>
			<td><?= $row["judul_lomba"] ?></td>
			<td><?= $row["kategori_pendaftar"] ?></td>
			<td><?= $row["biaya_lomba"] ?></td>
			<td><?= $row["tanggal_lomba"] ?></td>
			<td><?= $row["deskripsi_lomba"] ?><td>
		</tr>
		<br>
		<?php $i++; ?>
	<?php endforeach; ?>
	</table>
	</div>
<script src="js/script.js"></script>
</body>
</html>

