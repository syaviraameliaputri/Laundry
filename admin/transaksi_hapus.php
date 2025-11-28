<?php
// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus transaksi
mysqli_query($koneksi,"delete from transaksi where transaksi_id='$id'");

// menghapus data pakaian
mysqli_query($koneksi,"delete from pakaian where pakaian_id='$id'");

header("location:transaksi.php");
?>