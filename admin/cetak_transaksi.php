<?php
require 'koneksi.php';

// Pastikan id_transaksi adalah integer untuk menghindari SQL injection
$id_transaksi = intval($_GET['id']);

// Query untuk mendapatkan data transaksi dan detail transaksi
$query = "
    SELECT transaksi.*, pelanggan.nama_pelanggan, detail_transaksi.*, outlet.* 
    FROM transaksi
    INNER JOIN pelanggan ON pelanggan.id_pelanggan = transaksi.id_pelanggan
    INNER JOIN detail_transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi
    INNER JOIN outlet ON outlet.id_outlet = transaksi.outlet_id
    WHERE transaksi.id_transaksi = $id_transaksi
";
$result = mysqli_query($conn, $query);

// Jika data ditemukan
if ($result && mysqli_num_rows($result) > 0) {
    $trans = mysqli_fetch_assoc($result);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cetak Struk</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .container {
                width: 80mm;
                margin: 0 auto;
                padding: 10px;
                border: 1px solid #000;
            }
            .header {
                text-align: center;
                margin-bottom: 10px;
            }
            .table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 10px;
            }
            .table th, .table td {
                padding: 5px;
                text-align: left;
            }
            .footer {
                text-align: center;
                margin-top: 20px;
            }
            .print-button {
                display: none;
            }
            @media print {
                .print-button {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>Loundry</h2>
                <p><?= $trans['alamat_outlet'];?><br><?= $trans['telp_outlet'];?></p>
                <p><strong>Kode Invoice: <?= $trans['kode_invoice']; ?></strong></p>
            </div>
            <table class="table">
                <tr>
                    <th>Nama Pelanggan</th>
                    <td><?= $trans['nama_pelanggan']; ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><?= ucwords($trans['status']); ?></td>
                </tr>
                <tr>
                    <th>Status Pembayaran</th>
                    <td><?= ucwords($trans['status_bayar']); ?></td>
                </tr>
                <tr>
                    <th>Total Harga</th>
                    <td><?= 'Rp ' . number_format($trans['total_harga']); ?></td>
                </tr>
                <!-- Tambahkan detail lainnya sesuai kebutuhan -->
            </table>
            <div class="footer">
                <p>Terima Kasih atas kunjungan Anda!</p>
                <p>Semoga Hari Anda Menyenangkan</p>
            </div>
        </div>
        <button class="print-button" onclick="window.print();">Cetak Struk</button>
    </body>
    </html>

    <?php
} else {
    echo "Data tidak ditemukan!";
}
?>
