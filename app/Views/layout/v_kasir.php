<?php
include 'dashboard.php';
?>

<style>
.card-body {
    padding-top: 0px;
}

.modal-header {
    justify-content: normal;
}
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
                                <tr>
                                    <td>1</td>
                                    <td>001</td>
                                    <td>12-12-2022</td>
                                    <td>Okta</td>
                                    <td>Selesai</td>
                                    <td>
                                        <button type="button" class="btn btn-warning fas fa-list-alt"
                                            data-bs-toggle="modal" data-bs-target="#RincianPesanan">
                                        </button>

                                        <!-- modal hapus -->
                                        <div class="modal fade" id="RincianPesanan" tabindex="-1"
                                            aria-labelledby="hapusmodal" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <!-- <div class="modal-header">
                                                        <label class="col-sm-2">Nama</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control" id="nama_pemesan"
                                                                name="nama_pemesan">
                                                        </div>

                                                        <label class="col-sm-2">No. Meja</label>
                                                        <div class="col-sm-2">
                                                            <input type="text" class="form-control" id="no_meja"
                                                                name="no_meja">
                                                        </div>

                                                    </div> -->
                                                    <div class="modal-body">
                                                        <!-- <div class="table">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">No.</th>
                                                                        <th scope="col">Nama Menu</th>
                                                                        <th scope="col">Jumlah</th>
                                                                        <th scope="col">Harga</th>
                                                                        <th scope="col">Total</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div> -->
                                                        <div class="mb-1 row">
                                                            <label class="col-sm-4">Nama Pemesan</label>
                                                            <div class="col-sm-4">
                                                                <input name="nama_menu" class="form-control" value="">

                                                            </div>
                                                            <label class="col-sm-2">No. Meja</label>
                                                            <div class="col-sm-2">
                                                                <input name="nama_menu" class="form-control" value="">

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
                                                        <!-- <div class="mb-1 row">
                                                            <label class="col-sm-4">Jumlah</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="jumlah" class="form-control"
                                                                    value="">
                                                            </div>
                                                        </div>
                                                        <div class="mb-1 row">
                                                            <label class="col-sm-4">Harga</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="harga" class="form-control"
                                                                    value="Rp. ">
                                                            </div>
                                                        </div> -->
                                                        <div class="mb-1 row">
                                                            <label class="col-sm-4">Total</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="total" class="form-control"
                                                                    value="Rp. ">
                                                            </div>
                                                        </div>
                                                        <div class="mb-1 row">
                                                            <label class="col-sm-4">Jumlah Bayar</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="total" class="form-control"
                                                                    value="Rp. " placeholder="Masukkan Jumlah Bayar">
                                                            </div>
                                                        </div>
                                                        <div class="mb-1 row">
                                                            <label class="col-sm-4">Kembali</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="kembali" class="form-control"
                                                                    value="Rp. ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="<?= base_url('dashboard/kasir'); ?> "
                                                            class="btn btn-secondary">Kembali</a>
                                                        <a href="#" class="btn btn-success">Sudah Bayar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>002</td>
                                    <td>18-12-2022</td>
                                    <td>Nadia</td>
                                    <td>Selesai</td>
                                    <td><button type="button" class="btn btn-warning fas fa-list-alt"
                                            data-bs-toggle="modal" data-bs-target="#RincianPesanan">
                                        </button>

                                        <!-- modal hapus -->
                                        <div class="modal fade" id="RincianPesanan" tabindex="-1"
                                            aria-labelledby="hapusmodal" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <label class="col-sm-1.5">Nama</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" id="nama_pemesan"
                                                                name="nama_pemesan">
                                                        </div>

                                                        <label class="col-sm-1.5">No. Meja</label>
                                                        <div class="col-sm-2">
                                                            <input type="text" class="form-control" id="no_meja"
                                                                name="no_meja">
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="table">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">No.</th>
                                                                        <th scope="col">Nama Menu</th>
                                                                        <th scope="col">Jumlah</th>
                                                                        <th scope="col">Harga</th>
                                                                        <th scope="col">Total</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="<?= base_url('dashboard/koki'); ?> "
                                                            class="btn btn-secondary">kembali</a>
                                                        <a href="#" class="btn btn-success">Pesanan Selesai</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>