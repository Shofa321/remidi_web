<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMPIL TABEL DATA</title>
</head>
<body>
    <h3>TABEL DATA STOK BARANG</h3>
    <h4>Smk Negeri 1 Sayung</h4>
    <table border="1">
        <tr>
            <td>NO</td>
            <td>Nama Barang</td>
            <td>Harga Jual</td>
            <td>Harga Beli</td>
            <td>Satuan</td>
            <td>Kategori</td>
            <td>Aksi</td>
        </tr>
        <?php
        include("koneksi.php");
        $sql = "SELECT * FROM tb_master";
        $query = mysqli_query($koneksi, $sql);
        $no = 1;
        while($row = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama_barang']; ?></td>
                <td><?= $row['harga_jual']; ?></td>
                <td><?= $row['harga_beli']; ?></td>
                <td><?= $row['satuan']; ?></td>
                <td><?= $row['kategori']; ?></td>
                <td>
                    <a href="edit_barang.php?kode_barang=<?= $row['kode_barang']; ?>">Edit</a> || 
                    <a href="hapus_barang.php?kode_barang=<?= $row['kode_barang']; ?>">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <button><a href="index.php">KEMBALI</a></button>
    <button><a href="tambah_barang.php">TAMBAH</a></button>
</body>
</html>