<?php
// Menggunakan koneksi
include "koneksi.php";
?>

<b>Hapus Data Buku</b>
<hr>
Apakah Anda yakin menghapus data ini? </br>
<form method="POST" action="">
	<button type="submit" name="tombol_hapus">Delete</button>
	<button type="submit" name="tombol_batal">Batal</button>
</form>

<?php 
//Batal Hapus
if (isset($_POST['tombol_batal'])) {
	header('location: index.php');
	exit;
}

//Hapus Data
if (isset($_POST['tombol_hapus'])) {
	$query = mysqli_query($koneksi, "DELETE FROM tb_buku_2201010412 WHERE idbuku_2201010412='$_REQUEST[id]'");

	if ($query) {
		echo "Data berhasil dihapus";
		header('location: index.php');
		exit;
	} else {
		echo "Data gagal dihapus";
	}
}
?>
