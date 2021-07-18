<?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM produk WHERE id_prd = '{$id}'");
    $result = mysqli_query($conn, "DELETE FROM pembelli WHERE id_pmb = '{$id}'");
    $result = mysqli_query($conn, "DELETE FROM trransaksi WHERE id_trs = '{$id}'");
    $result = mysqli_query($conn, "DELETE FROM pembayarann WHERE id_bayar = '{$id}'");

    header('location: index.php');
?>