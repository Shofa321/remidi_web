<?php
include("koneksi.php");
if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $no_fatkur = $_POST['no_fatkur'];
    $nama_konsumen = $_POST['nama_konsumen'];
    $kode_barang = $_POST['kode_barang'];
    $jumlah = $_POST['jumlah'];
    $harga_satuan = $_POST['harga_satuan'];
    $harga_total = $_POST['harga_total'];

    $sql = "UPDATE tb_penjualan SET no_fatkur='$no_fatkur', nama_konsumen='$nama_konsumen', kode_barang='$kode_barang', jumlah='$jumlah', harga_satuan='$harga_satuan', harga_total='$harga_total' WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:tampil_transaksi.php?status=sukses');
    } else {
        header('location:tampil_transaksi.php?status=gagal');
    }
}
?>