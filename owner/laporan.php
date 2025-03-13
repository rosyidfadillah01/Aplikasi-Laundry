<?php
$title = 'Data Laporan';
require 'koneksi.php';

$query = "SELECT transaksi.*, pelanggan.nama_pelanggan, detail_transaksi.total_harga, outlet.nama_outlet FROM transaksi INNER JOIN pelanggan ON pelanggan.id_pelanggan = transaksi.id_pelanggan INNER JOIN detail_transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi INNER JOIN outlet ON outlet.id_outlet = transaksi.outlet_id";
$data = mysqli_query($conn, $query);

require 'header.php';
?>

<style>
    .status-baru {
        color: blue;
    }
    .status-proses {
        color: orangered;
    }
    .status-selesai {
        color: green;
    }
    .status-diambil {
        color: red;
    }
    .status-belum {
        color: red;
    }
    .status-dibayar {
        color: green;
    }
</style>


<div class="panel-header" style="background: linear-gradient(10deg, #9d3b8b 40%, #4db4e8 );">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
            </div>
        </div>
        <?php if (isset($_SESSION['msg']) && $_SESSION['msg'] <> '') { 
            $msg = $_SESSION['msg']; 
            echo "<script>var message = '{$msg}';</script>"; 
            $_SESSION['msg'] = ''; 
        } else {
            echo "<script>var message = '';</script>"; 
        } ?>
    </div>
</div>
<div class="page-inner mt--5">

    <diva class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title"><?= $title; ?></h4>
                        <a href="cetak.php" target="_blank" class="btn btn-primary btn-round ml-auto">
                            <i class="fas fa-print"></i>
                            Cetak Laporan
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 7%">#</th>
                                    <th>Kode</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Status</th>
                                    <th>Pembayaran</th>
                                    <th>Total</th>
                                    <th>Outlet Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                if (mysqli_num_rows($data) > 0) {
                                    while ($trans = mysqli_fetch_assoc($data)) {
                                        // Tentukan kelas CSS berdasarkan nilai status
                                    $statusClass = '';
                                    $statusBayarClass = '';
                                    switch ($trans['status']) {
                                        case 'baru':
                                            $statusClass = 'status-baru';
                                            break;
                                        case 'proses':
                                            $statusClass = 'status-proses';
                                            break;
                                        case 'selesai':
                                            $statusClass = 'status-selesai';
                                            break;
                                        case 'diambil':
                                            $statusClass = 'status-diambil';
                                            break;
                                        default:
                                            $statusClass = '';
                                            break;
                                        }
                                    switch ($trans['status_bayar']) {
                                        case 'belum':
                                            $statusBayarClass = 'status-belum';
                                            break;
                                        case 'dibayar':
                                            $statusBayarClass = 'status-dibayar';
                                            break;
                                        default:
                                            $statusBayarClass = '';
                                            break;
                                        }
                                ?>

                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $trans['kode_invoice']; ?></td>
                                        <td><?= $trans['nama_pelanggan']; ?></td>
                                        <td class="<?= $statusClass;?> fw-bold"><?= ucwords($trans['status']); ?></td>
                                        <td class="<?= $statusBayarClass;?> fw-bold"><?= ucwords($trans['status_bayar']); ?></td>
                                        <td><?= 'Rp ' . number_format($trans['total_harga']); ?></td>
                                        <td><?= $trans['nama_outlet']; ?></td>
                                    </tr>
                                <?php }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (message !== '') {
            Swal.fire({
                title: 'Message',
                text: message,
                icon: 'success',
                confirmButtonText: 'OK'
            });
        }
    });
</script>
<?php
require 'footer.php';
?>