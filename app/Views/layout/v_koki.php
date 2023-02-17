<?php
include 'dashboard.php';
?>

<style>

</style>

<body>
    <!-- <form method="GET" action="" class="form-group">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="cari" placeholder="Mencari Data Berdasarkan Nama">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="Submit">CARI DATA</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="container-fluid">
            <section class=" mt-2 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-level-down-alt mr-1"></i>
                            <b>Pesanan Baru</b>
                        </h3><br><br>
                        <h6>Pesanan baru yang belum dihidangkan </h6>

                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <div class="filter">
                            <form role="form" method="post" action="">
                                <div class="form-group">
                                    <label class="label"><i class="fas fa-filter"></i>Filter: </label>
                                    <select id="filter" class="select-menu">
                                        <option value="">Semua</option>
                                        <option value="">Menunggu</option>
                                        <option value="">Selesai</option>

                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="tab-content">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tgl Pesanan</th>
                                        <th scope="col">No. Meja</th>
                                        <th scope="col">Nama Pemesan</th>
                                        <th scope="col">Jumlah Pesanan</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // $no=1+(10*($page-1));
                                    $i = 1;
                                    foreach ($koki as $item) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $item['tanggal'] ?></td>
                                        <td><?= $item['no_meja'] ?></td>
                                        <td><?= $item['nama_pelanggan'] ?></td>
                                        <td><?= $item['jml_pesanan'] ?></td>
                                        <td><?= $item['status_pesanan'] ?></td>
                                        <td>

                                            <!-- <button type="button" class="btn btn-warning btn-click-detail"
                                                data-id=" // $item["id_pesanan"] ?>">
                                                <i class="fas fa-pen"></i>
                                            </button> -->

                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#detail_<?= $item['id_pesanan'] ?>"> <i
                                                    class="fas fa-check"></i>
                                            </button>

                                            <!-- modal rincian -->
                                            <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"
                                                tabindex="-1" role="dialog" id="detail_<?= $item['id_pesanan'] ?>"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form
                                                            action="<?= base_url('dashboard/koki/' . $item['id_pesanan']) ?>"
                                                            method="post">
                                                            <div class="modal-header">
                                                                <label class="col-sm-2">Nama</label>
                                                                <div class="col-sm-7">
                                                                    <span> <?= $item['nama_pelanggan'] ?></span>
                                                                </div>

                                                                <label class="col-sm-2">No. Meja</label>
                                                                <div class="col-sm-7">
                                                                    <span><?= $item['no_meja'] ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="table">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>No.</th>
                                                                                <th>Nama Menu</th>
                                                                                <th>Jumlah</th>
                                                                                <th>Notes</th>
                                                                                <th>Status</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <!-- <tbody id="detail">
                                                                    </tbody> -->

                                                                        <tbody>
                                                                            <?php
                                                                                $no = 1;
                                                                                foreach ($detail as $items) :
                                                                                    if ($items['id_pesanan'] == $item['id_pesanan']) :
                                                                                ?>
                                                                            <tr>
                                                                                <td><?= $no ?></td>
                                                                                <td><?= $items['nama_menu'] ?></td>
                                                                                <td><?= $items['quantity'] ?></td>
                                                                                <td><?= $items['notes_pesanan'] ?></td>
                                                                                <td><?= $items['status_pesanan'] ?></td>
                                                                            </tr>
                                                                            <?php endif;
                                                                                    $no++;
                                                                                endforeach ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="<?= base_url('dashboard/koki'); ?> "
                                                                    class="btn btn-secondary">Kembali</a>
                                                                <button type="submit" class="btn btn-warning">Pesanan
                                                                    Selesai</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                        $i++;
                                    endforeach; ?>
                                </tbody>
                            </table>
                            <!-- $pager->Links()  -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>