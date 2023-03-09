<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $id = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $satuan = $_POST['satuan'];
    $kategori = $_POST['kategori'];

    $sql = "UPDATE tb_master SET nama_barang='$nama_barang', harga_jual='$harga_jual', harga_beli='$harga_beli', satuan='$satuan', kategori='$kategori' WHERE kode_barang='$id'";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:tampil_barang.php?status=sukses');
    } else {
        header('location:tampil_barang.php?status=gagal');
    }
}
?>