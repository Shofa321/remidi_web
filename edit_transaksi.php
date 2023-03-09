<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header('location:tampil_transaksi.php');
}
$id = $_GET['id'];
$sql = "SELECT * FROM tb_penjualan WHERE id='$id'";
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
        <form action="proses_edit_transaksi.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
            <tr>
                <td><label for="no_fatkur">No Fatkur</label></td>
                <td><input type="text" name="no_fatkur" value="<?php echo $row['no_fatkur']; ?>" /></td>
            </tr>
            <tr>
                <td><label for="nama_konsumen">Nama Konsumen</label></td>
                <td><input type="text" name="nama_konsumen" value="<?php echo $row['nama_konsumen']; ?>" /></td>
            </tr>
            <tr>
                <td><label for="kode_barang">Kode Barang</label></td>
                <td><input type="text" name="kode_barang" value="<?php echo $row['kode_barang']; ?>" /></td>
            </tr>
            <tr>
                <td><label for="jumlah">Jumlah</label></td>
                <td><input type="text" name="jumlah" value="<?php echo $row['jumlah']; ?>" /></td>
            </tr>
            <tr>
                <td><label for="harga_satuan" >Harga Satuan</label></td>
                <td><input type="text" name="harga_satuan" value="<?php echo $row['harga_satuan']; ?>" /></td>
            </tr>
            <tr>
                <td><label for="harga_total">Harga Total</label></td>
                <td><input type="text" name="harga_total" value="<?php echo $row['harga_total']; ?>" /></td>
            </tr>
            <input type="submit" name="simpan" value="SIMPAN" /><br>
        </form>
    </table>
</body>
</html>