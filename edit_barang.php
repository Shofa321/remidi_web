<?php
include("koneksi.php");
if(!isset($_GET['kode_barang'])){
    header('location:tampil_barang.php');
}
$id = $_GET['kode_barang'];
$sql = "SELECT * FROM tb_master WHERE kode_barang='$id'";
$query = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORUM EDIT DATA BARANG</title>
</head>
<body>
<h3>FORUM EDIT DATA STOK BARANG</h3>
<table>
        <form action="proses_tambah_edit.php" method="post">
            <input type="hidden" name="kode_barang" value="<?php echo $row['kode_barang'];?>" />
            <tr>
                <td><label for="nama_barang">Nama Barang</label></td>
                <td><input type="text" name="nama_barang" value="<?php echo $row['kode_barang'];?>" /></td>
            </tr>
            <tr>
                <td><label for="harga_jual">Harga Jual</label></td>
                <td><input type="text" name="harga_jual" value="<?php echo $row['harga_jual'];?>" /></td>
            </tr>
            <tr>
                <td><label for="harga_beli">Harga Beli</label></td>
                <td><input type="text" name="harga_beli" value="<?php echo $row['harga_beli'];?>" /></td>
            </tr>
            <tr>
                <td><label for="satuan">Satuan</label></td>
                <td><input type="text" name="satuan" value="<?php echo $row['satuan'];?>" /></td>
            </tr>
            <tr>
                <td><label for="kategori">Kategori</label></td>
                <td><input type="text" name="kategori" value="<?php echo $row['kategori'];?>" /></td>
            </tr>
            <input type="submit" name="edit" value="SIMPAN" /><br>
        </form>
    </table>
</body>
</html>