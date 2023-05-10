<?php 
// MENGGUNAKAN KONEKSI
include "koneksi.php";
 ?>

 <b> Update Data Mahasiswa</b>
 <hr>

 <form method="post" action="">
 	<table border="1">
 		<tr>
 			<td>ID Buku</td>
 			<td> : </td>
 			<td>
 				<input type="text" name="idbuku" required>
 			</td>
 		</tr>
 		<tr>
 			<td>Judul Buku</td>
 			<td> : </td>
 			<td>
 				<input type="text" name="judulbuku" required>
 			</td>
 		</tr>
 		<tr>
 			<td>Kategori Buku</td>
 			<td> : </td>
 			<td>
 				<input type="text" name="kategoribuku" required>
 			</td>
 		</tr>
 		<tr>
 			<td>Penerbit</td>
 			<td> : </td>
 			<td>
 				<input type="text" name="penerbit" required>
 			</td>
 		</tr>
 		<tr>
 			<td>Penulis</td>
 			<td> : </td>
 			<td>
 				<input type="text" name="penulis" required>
 			</td>
 		</tr>
 		<tr>
 			<td>Stok</td>
 			<td> : </td>
 			<td>
 				<input type="number" name="stok" required>
 			</td>
 		</tr>
 		<tr>
 			<td>Harga</td>
 			<td> : </td>
 			<td>
 				<input type="number" name="harga" required>
 			</td>
 		</tr>
 	</table>
 	<button type="submit" name="tombol_simpan">Simpan</button>
 </form>


<?php
// MENYIMPAN DATA
if (isset($_POST['tombol_simpan'])) {
    include "koneksi.php";

    $idBuku = $_POST['idbuku'];
    $judulBuku = $_POST['judulbuku'];
    $kategoriBuku = $_POST['kategoribuku'];
    $penerbit = $_POST['penerbit'];
    $penulis = $_POST['penulis'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_buku_2201010412 (idbuku_2201010412, judulbuku_2201010412, kategoribuku_2201010412, penerbit_2201010412, penulis_2201010412, stok_2201010412, harga_2201010412) VALUES ('$idBuku', '$judulBuku', '$kategoriBuku', '$penerbit', '$penulis', '$stok', '$harga')");

    if ($query) {
        echo "Data Berhasil Ditambahkan!";
        header('location:index.php');
    } else {
        echo "Data gagal ditambahkan!";
    }
}
?>
       
