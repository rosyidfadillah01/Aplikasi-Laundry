<?php
$title = 'Data Transaksi';
require 'koneksi.php';

$query = "SELECT transaksi.*, pelanggan.nama_pelanggan, detail_transaksi.total_harga FROM transaksi INNER JOIN pelanggan ON pelanggan.id_pelanggan = transaksi.id_pelanggan INNER JOIN detail_transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi";
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
                        <a href="cari.php" class="btn btn-success btn-round ml-auto mr-2">
                            <i class="fa-solid fa-file-circle-plus"></i>
                            Tambah Transaksi
                        </a>
                        <a href="konfirmasi.php" class="btn btn-warning btn-round">
                            <i class="fas fa-user-check"></i>
                            Konfirmasi Pembayaran
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th style="width: 7%">#</th>
                                    <th>Kode</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Status</th>
                                    <th>Pembayaran</th>
                                    <th>Total</th>
                                    <th style="width: 5%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                if (mysqli_num_rows($data) > 0) {
                                    while ($trans = mysqli_fetch_assoc($data)) {

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
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="detail.php?id=<?= $trans['id_transaksi']; ?>" type="button" data-toggle="tooltip" title="" class="btn btn-primary btn-link" data-original-title="Detail">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    <a href="hapus_transaksi.php?id=<?= $trans['id_transaksi']; ?>" onclick="return confirm('Yakin hapus data?');" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </a>
                                                    <a href="cetak_transaksi.php?id=<?= $trans['id_transaksi']; ?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-info" data-original-title="Cetak">
                                                        <i class="fa-solid fa-print"></i>
                                                    </a>
                                                </div>
                                            </td>
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
<?php
require 'footer.php';
?>