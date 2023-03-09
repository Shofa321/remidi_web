<?php
include("koneksi.php");

$id = $_GET['id'];

$sql = "DELETE FROM tb_penjualan WHERE id='$id'";
$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:tampil_transaksi.php?status=sukses');
} else {
    header('location:tampil_transaksi.php?status=gagal');
}
?>