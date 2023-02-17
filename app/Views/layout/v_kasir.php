<?php
include 'dashboard.php';
?>

<style>

</style>

<body>
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="container-fluid">
            <section class=" mt-2 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-check mr-1"></i>
                            <b>Pesanan Selesai</b>
                        </h3><br><br>
                        <h6>Pesanan yang sudah selesai dihidangkan dan melakukan pembayaran</h6>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <div class="filter">
                            <form role="form" method="post" action="">
                                <div class="form-group">
                                    <label class="label"><i class="fas fa-filter"></i>Filter: </label>
                                    <select id="filter" class="select-menu">
                                        <option value="">Semua</option>
                                        <option value="">Selesai</option>
                                        <option value="">Sudah Bayar</option>

                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="tab-content">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No. Meja</th>
                                        <th scope="col">Id Pesanan</th>
                                        <th scope="col">Tgl Pesanan</th>
                                        <th scope="col">Nama Pemesan</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Rincian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($pesanan as $item) :
                                    ?>
                                    <tr>
                                        <td><?= $item['no_meja'] ?></td>
                                        <td><?= $item['id_pesanan'] ?></td>
                                        <td><?= $item['tanggal'] ?></td>
                                        <td><?= $item['nama_pelanggan'] ?></td>
                                        <td><?= $item['status_pesanan'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning fas fa-list-alt"
                                                data-bs-toggle="modal" data-bs-target="#RincianPesanan">
                                            </button>

                                            <!-- modal transaksi -->
                                            <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"
                                                id="RincianPesanan" tabindex="-1" aria-labelledby="hapusmodal"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4>Form Pembayaran</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- <div class="mb-1 row">
                                                                <label class="col-sm-4">Id Pesanan</label>
                                                                <div class="col-sm-4">
                                                                    <span> </span>
                                                                </div>
                                                            </div> -->
                                                            <div class="mb-1 row">
                                                                <label class="col-sm-4">Nama Pemesan</label>
                                                                <div class="col-sm-4">
                                                                    <span><?= $item['nama_pelanggan'] ?></span>

                                                                </div>
                                                                <label class="col-sm-2">No. Meja</label>
                                                                <div class="col-sm-2">
                                                                    <span><?= $item['no_meja'] ?></span>

                                                                </div>
                                                            </div>

                                                            <div class="mb-1 row">
                                                                <label class="col-sm-4">Pesanan</label>
                                                                <div class="col-sm-8">
                                                                    <textarea name="nama_menu" class="form-control"
                                                                        value="- Nasi Mansure x 3 @23.000 = 69.000">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="mb-1 row">
                                                                <label class="col-sm-4">Total</label>
                                                                <div class="col-sm-4">
                                                                    <span>Rp. 94000</span>
                                                                </div>
                                                            </div>
                                                            <div class="mb-1 row">
                                                                <label class="col-sm-4">Jumlah Bayar</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="total" class="form-control"
                                                                        value="Rp. "
                                                                        placeholder="Masukkan Jumlah Bayar">
                                                                </div>
                                                                <span class="col-sm-4">
                                                                    ex: Rp. 200000
                                                                </span>

                                                            </div>
                                                            <div class="mb-1 row">
                                                                <label class="col-sm-4">Kembali</label>
                                                                <div class="col-sm-4">
                                                                    <span>Rp. 6000</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="<?= base_url('dashboard/transaksi'); ?> "
                                                                class="btn btn-secondary">Kembali</a>
                                                            <a href="#" class="btn btn-success">Sudah Bayar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>