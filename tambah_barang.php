<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Tambah Barang</title>
</head>
<body>
    <h3>FORUM TAMBAH DATA STOK BARANG</h3>
    <table>
        <form action="proses_tambah_barang.php" method="post">
            <tr>
                <td><label for="nama_barang">Nama Barang</label></td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr>
                <td><label for="harga_jual">Harga Jual</label></td>
                <td><input type="text" name="harga_jual"></td>
            </tr>
            <tr>
                <td><label for="harga_beli">Harga Beli</label></td>
                <td><input type="text" name="harga_beli"></td>
            </tr>
            <tr>
                <td><label for="satuan">Satuan</label></td>
                <td><input type="text" name="satuan"></td>
            </tr>
            <tr>
                <td><label for="kategori">Kategori</label></td>
                <td><input type="text" name="kategori"></td>
            </tr>
            <input type="submit" name="simpan" value="SIMPAN" /><br>
        </form>
    </table>
</body>
</html>