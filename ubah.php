<?php
// MENGGUNAKAN KONEKSI
include "koneksi.php";
?>

<b>Update Data Mahasiswa</b>
<hr>

<?php
if (isset($_POST['tombol_simpan'])) {
    $idBuku = $_POST['id_buku'];
    $judulBuku = $_POST['judul_buku'];
    $kategoriBuku = $_POST['kategori_buku'];
    $penerbit = $_POST['penerbit'];
    $penulis = $_POST['penulis'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $query = mysqli_query($koneksi, "UPDATE tb_buku_2201010412 SET judulbuku_2201010412='$judulBuku', kategoribuku_2201010412='$kategoriBuku', penerbit_2201010412='$penerbit', penulis_2201010412='$penulis', stok_2201010412='$stok', harga_2201010412='$harga' WHERE idbuku_2201010412='$idBuku'");

    if ($query) {
        echo "Data berhasil diubah!";
        header('location: index.php');
        exit;
    } else {
        echo "Data gagal diubah!";
    }
}
?>

<?php
$idBuku = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_buku_2201010412 WHERE idbuku_2201010412='$idBuku'");
$data = mysqli_fetch_assoc($query);
?>

<form method="post" action="">
    <input type="hidden" name="id_buku" value="<?php echo $data['idbuku_2201010412']; ?>">
    <table border="1">
        <tr>
            <td>ID Buku</td>
            <td> : </td>
            <td>
                <input type="text" name="id_buku" value="<?php echo $data['idbuku_2201010412']; ?>" required>
            </td>
        </tr>
        <tr>
            <td>Judul Buku</td>
            <td> : </td>
            <td>
                <input type="text" name="judul_buku" value="<?php echo $data['judulbuku_2201010412']; ?>" required>
            </td>
        </tr>
        <tr>
            <td>Kategori Buku</td>
            <td> : </td>
            <td>
                <input type="text" name="kategori_buku" value="<?php echo $data['kategoribuku_2201010412']; ?>" required>
            </td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td> : </td>
            <td>
                <input type="text" name="penerbit" value="<?php echo $data['penerbit_2201010412']; ?>" required>
            </td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td> : </td>
            <td>
                <input type="text" name="penulis" value="<?php echo $data['penulis_2201010412']; ?>" required>
            </td>
        </tr>
        <tr>
            <td>Stok</td>
            <td> : </td>
            <td>
                <input type="number" name="stok" value="<?php echo $data['stok_2201010412']; ?>" required>
            </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td> : </td>
            <td>
                <input type="number" name="harga" value="<?php echo $data['harga_2201010412']; ?>" required>
            </td>
        </tr>
    </table>
    <button type="submit" name="tombol_simpan">Simpan</button>
</form>
