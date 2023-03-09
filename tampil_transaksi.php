<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMPIL TABEL DATA</title>
</head>
<body>
    <h3>TABEL DATA TRANSAKSI BARANG</h3>
    <h4>Smk Negeri 1 Sayung</h4>
    <table border="1">
        <tr>
            <td>No</td>
            <td>No Fatkur</td>
            <td>Nama Konsumen</td>
            <td>Kode Barang</td>
            <td>Jumlah</td>
            <td>Harga Satuan</td>
            <td>Harga Total</td>
            <td>Aksi</td>
        </tr>
        <?php
        include("koneksi.php");
        $sql = "SELECT * FROM tb_penjualan";
        $query = mysqli_query($koneksi, $sql);
        $no = 1;
        while($row = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['no_fatkur']; ?></td>
                <td><?= $row['nama_konsumen']; ?></td>
                <td><?= $row['kode_barang']; ?></td>
                <td><?= $row['jumlah']; ?></td>
                <td><?= $row['harga_satuan']; ?></td>
                <td><?= $row['harga_total']; ?></td>
                <td>
                    <a href="edit_transaksi.php?id=<?= $row['id']; ?>">Edit</a> || 
                    <a href="hapus_transaksi.php?id=<?= $row['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <button><a href="index.php">KEMBALI</a></button>
    <button><a href="tambah_transaksi.php">TAMBAH</a></button>
</body>
</html>