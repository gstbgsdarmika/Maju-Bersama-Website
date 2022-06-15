<?php 
require '../functionsLomba.php';
$id_lomba = $_GET["id"];

if( hapus($id_lomba) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = '../index.php';
		</script>
		";
	} else {
	echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = '../index.php';
		</script>";
	}
?>
