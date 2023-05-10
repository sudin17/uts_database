<?php
// Menggunakan koneksi
include "koneksi.php";

echo "<b>Data Buku</b><hr>";


echo "<table border=1>";
	echo "<tr>";
		echo "<th> ID Buku </th>";
		echo "<th> Judul Buku </th>";
		echo "<th> Kategori Buku </th>";
		echo "<th> Penerbit </th>";
		echo "<th> Penulis </th>";
		echo "<th> Stok </th>";
		echo "<th> Harga </th>";
		echo "<th colspan=2> Aksi </th>";
	echo "</tr>";

	$query = mysqli_query($koneksi, "SELECT * FROM tb_buku_2201010412");
	while ($tampilkan = mysqli_fetch_array($query)) {
		echo "<tr>";
	    	echo "<td>$tampilkan[idbuku_2201010412]</td>";
	    	echo "<td>$tampilkan[judulbuku_2201010412]</td>";
	    	echo "<td>$tampilkan[kategoribuku_2201010412]</td>";
	    	echo "<td>$tampilkan[penerbit_2201010412]</td>";
	    	echo "<td>$tampilkan[penulis_2201010412]</td>";
	    	echo "<td>$tampilkan[stok_2201010412]</td>";
	    	echo "<td>$tampilkan[harga_2201010412]</td>";
	    	echo "<td> <a href='ubah.php?id=$tampilkan[idbuku_2201010412]'>Ubah</a> </td>";
	    	echo "<td> <a href='hapus.php?id=$tampilkan[idbuku_2201010412]'>Delete</a> </td>";
    	echo "</tr>";
	}
echo "</table>";
echo "<a href ='tambah.php'>Update Data Buku</a> <br>";
?>
