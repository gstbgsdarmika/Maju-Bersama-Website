<?php 
require '../functionsBeasiswa.php';
$id_beasiswa = $_GET["id"];

if( hapus($id_beasiswa) > 0 ) {
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
