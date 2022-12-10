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
                                <input type="date" name="tgl_awal" class="form-control ml-2" value="?= $tgl_awal; ?>">
                                sd
                                <input type="date" name="tgl_akhir" class="form-control mr-2" value="?= $tgl_akhir; ?>">
                                <button type="submit" name="filter_tgl" class="btn btn-dark">View</button>
                            </h4>
                        </form>

                        <div class="tab-content p-0">
                            <table class="table mt-2">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">No. Pesanan</th>
                                        <th scope="col">Tgl Pesanan</th>
                                        <th scope="col">Nama Pemesan</th>
                                        <th scope="col">Status Bayar</th>
                                        <th scope="col">Total Bayar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>001</td>
                                        <td>12-12-2022</td>
                                        <td>Okta</td>
                                        <td>Done</td>
                                        <td>Rp. 50.000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>002</td>
                                        <td>18-12-2022</td>
                                        <td>Nadia</td>
                                        <td>Done</td>
                                        <td>Rp. 150.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" name="export" class="btn btn-info" style="float: right;">Export</button>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>