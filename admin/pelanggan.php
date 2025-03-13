<?php
$title = 'Data Pelanggan';
require 'koneksi.php';

$query = 'SELECT * FROM pelanggan';
$data = mysqli_query($conn, $query);

require 'header.php';
?>

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
                        <a href="tambah_pelanggan.php" class="btn btn-success btn-round ml-auto">
                            <i class="fa-solid fa-user-plus"></i>
                            Tambah Pelanggan
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th style="width: 7%">#</th>
                                    <th>Nama</th>
                                    <th style="width: 20%;">No KTP</th>
                                    <th style="width: 25%;">Alamat</th>
                                    <th style="width: 15%;">Jenis Kelamin</th>
                                    <th style="width: 10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                if (mysqli_num_rows($data) > 0) {
                                    while ($plg = mysqli_fetch_assoc($data)) {
                                ?>

                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $plg['nama_pelanggan']; ?></td>
                                            <td><?= $plg['no_ktp']; ?></td>
                                            <td><?= $plg['alamat_pelanggan']; ?></td>
                                            <td><?php if ($plg['jenis_kelamin'] == 'L') {
                                                    echo "Laki-laki";
                                                } else {
                                                    echo "Perempuan";
                                                } ?>
                                            </td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="edit_pelanggan.php?id=<?= $plg['id_pelanggan']; ?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-warning btn-lg" data-original-title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="hapus_pelanggan.php?id=<?= $plg['id_pelanggan']; ?>" onclick="return confirm('Yakin hapus data?');" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
                                                        <i class="fa-solid fa-trash-can"></i>
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