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
                                    foreach($pesanan as $item):
                                    ?>
                                    <tr>
                                    <form action="<?= base_url('dashboard/transaksi/'.$item['id_pesanan']) ?>" method="post">
                                        <td><?= $item['no_meja']?></td>
                                        <td><?= $item['id_pesanan']?></td>
                                        <td><?php echo date('d-m-y', strtotime($item['tanggal']))?></td>
                                        <td><?= $item['nama_pelanggan']?></td>
                                        <td><input type="text" name="status_pesanan" value="<?= $item['status_pesanan']?>" hidden><?= $item['status_pesanan']?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning fas fa-list-alt"
                                                data-bs-toggle="modal" data-bs-target="#transaksi_<?= $item['id_pesanan']?>">
                                            </button>

                                            <!-- modal transaksi -->
                                            <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="transaksi_<?= $item['id_pesanan']?>" tabindex="-1"
                                                 aria-hidden="true" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="mb-1 row">
                                                                <label class="col-sm-4">Nama Pemesan</label>
                                                                <div class="col-sm-4">
                                                                    <input class="form-control" value="<?= $item['nama_pelanggan']?>" disabled>
                                                                </div>
                                                                <input type="hidden" name="id_pesanan" value="<?= $item["id_pesanan"] ?>">
                                                                <input type="hidden" name="status" value="<?= $item["status_pesanan"] ?>">
                                                                <label class="col-sm-2">No. Meja</label>
                                                                <div class="col-sm-2">
                                                                    <input class="form-control" value="<?= $item['no_meja']?>" disabled>
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
                                                                    <input type="text" name="total" class="form-control" disabled value="Rp. <?= $item['total_harga_seluruh']?>">
                                                                </div>
                                                            </div>
                                                            <div class="mb-1 row">
                                                                <label class="col-sm-4">Jumlah Bayar</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="jml_bayar" class="form-control"
                                                                        placeholder="Masukkan Jumlah Bayar">
                                                                </div>
                                                                <span class="col-sm-4">
                                                                    ex: Rp. 200000
                                                                </span>

                                                            </div>
                                                            <!-- <div class="mb-1 row">
                                                                <label class="col-sm-4">Kembali</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="kembali"
                                                                        class="form-control" value="Rp. ">
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="<?= base_url('dashboard/transaksi'); ?> "
                                                                class="btn btn-secondary">Kembali</a>
                                                            <button type="submit" class="btn btn-success">Sudah Bayar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </form>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>