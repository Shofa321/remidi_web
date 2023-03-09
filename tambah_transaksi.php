<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Tambah Barang</title>
</head>
<body>
    <h3>FORUM TAMBAH DATA TRANSAKSI BARANG</h3>
    <table>
        <form action="proses_tambah_transaksi.php" method="post">
            <tr>
                <td><label for="no_fatkur">No Fatkur</label></td>
                <td><input type="text" name="no_fatkur"></td>
            </tr>
            <tr>
                <td><label for="nama_konsumen">Nama Konsumen</label></td>
                <td><input type="text" name="nama_konsumen"></td>
            </tr>
            <tr>
                <td><label for="kode_barang">Kode Barang</label></td>
                <td><input type="text" name="kode_barang"></td>
            </tr>
            <tr>
                <td><label for="jumlah">Jumlah</label></td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr>
                <td><label for="harga_satuan">Harga Satuan</label></td>
                <td><input type="text" name="harga_satuan"></td>
            </tr>
            <tr>
                <td><label for="harga_total">Harga Total</label></td>
                <td><input type="text" name="harga_total"></td>
            </tr>
            <input type="submit" name="simpan" value="SIMPAN" /><br>
        </form>
    </table>
</body>
</html>