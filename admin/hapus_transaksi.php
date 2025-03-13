<?php
    require 'koneksi.php';

    $id_transaksi = intval($_GET['id']); // Pastikan id_transaksi adalah integer untuk menghindari SQL injection

    // Nonaktifkan pemeriksaan kunci asing
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=OFF");

    // Hapus data dari tabel detail_transaksi
    $query2 = "DELETE FROM detail_transaksi WHERE id_transaksi = $id_transaksi";
    $delete_detail = mysqli_query($conn, $query2);

    // Hapus data dari tabel transaksi
    $query = "DELETE FROM transaksi WHERE id_transaksi = $id_transaksi";
    $delete_trans = mysqli_query($conn, $query);

    // Aktifkan kembali pemeriksaan kunci asing
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=ON");

    // Cek hasil penghapusan dan arahkan dengan pesan yang sesuai
    if ($delete_trans && $delete_detail) {
        $_SESSION['msg'] = 'Berhasil menghapus data';
    } else {
        $_SESSION['msg'] = 'Gagal Hapus Data!!!';
    }

    header('location:transaksi.php');
?>
