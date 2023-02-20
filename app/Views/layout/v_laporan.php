<?php
include 'dashboard.php';
?>

<body>
    <div class="content-wrapper">
        <div class="container-fluid">
            <section class="mt-2 connectedSortable">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">
                            <i class="fas fa-file mr-1"></i>
                            <b>Cetak Laporan</b>
                            </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="" method="post" class="form-inline">
                            <h4>Periode Tanggal
                                <input type="date" name="tgl_awal" class="form-control ml-2" value=" <?= date('Y-m-d')?> ">
                                sd
                                <input type="date" name="tgl_akhir" class="form-control mr-2" value=" <?= date('Y-m-d')?> ">
                                <button type="submit" name="filter_tgl" class="btn btn-dark">View</button>
                            </h4>
                        </form>

                        <div class="tab-content p-0">
                            <table class="table mt-2">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Id Pesanan</th>
                                        <th scope="col">Tgl Transaksi</th>
                                        <th scope="col">Nama Pemesan</th>
                                        <th scope="col">Status Bayar</th>
                                        <th scope="col">Total Bayar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach($transaksi as $data):
                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $data['id_pesanan']?></td>
                                        <td><?= $data['tanggal_transaksi']?></td>
                                        <td><?= $data['nama_pelanggan']?></td>
                                        <td><?= $data['status_pesanan']?></td>
                                        <td><?= $data['jml_bayar']?></td>
                                    </tr>
                                    <?php $no++; endforeach;  ?>
                                </tbody>
                            </table>
                        </div>
                        <a target="_blank" href="export-pdf" class="btn btn-success">Export PDF</a>
                        <!-- <button type="submit" name="export" class="btn btn-info" style="float: right;">Export</button> -->
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>