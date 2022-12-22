<?php
include 'dashboard.php';
?>

<body>
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="container-fluid">
            <section class="mt-2 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-store mr-1"></i>
                            <b>Menu Toko Mansure</b>
                        </h3>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <a href="<?= base_url('dashboard/tambah-menu') ?>" class="btn btn-dark">Tambah Menu</a>
                        <div class="filter">
                            <form role="form" method="post" action="">
                                <div class="form-group">
                                    <label class="label"><i class="fas fa-filter"></i>Filter: </label>
                                    <select id="filter" class="select-menu">
                                        <option value="">Semua</option>
                                        <option value="">Tersedia</option>
                                        <option value="">Kosong</option>

                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="tab-content">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Menu</th>
                                        <th scope="col">Jenis Menu</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Status Menu</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($products as $item) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $item['nama_menu'] ?></td>
                                        <td><?= $item['jenis_menu'] ?></td>
                                        <td>Rp. <?= $item['harga'] ?></td>
                                        <td><?= $item['status_stok_menu'] ?></td>
                                        <td><?= $item['deskripsi'] ?></td>
                                        <td>
                                            <img src="<?= "/uploads/" . $item['gambar']; ?>" height="50px" width="50px"
                                                alt="Image">
                                        </td>
                                        <td>
                                            <a class="btn btn-warning"
                                                href="<?= base_url('dashboard/edit-menu/' . $item['id_menu']) ?>"><i
                                                    class="fas fa-pen"></i></a>
                                            <button type="button" class="btn btn-danger fas fa-trash-alt"
                                                data-bs-toggle="modal" data-bs-target="#hapus_<?= $item['id_menu'] ?>">
                                            </button>

                                            <!-- modal hapus -->
                                            <div class="modal fade" id="hapus_<?= $item['id_menu'] ?>" tabindex="-1"
                                                aria-labelledby="hapusmodal" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <?php echo "Apakah Anda Yakin Ingin Menghapus " . $item['nama_menu'] . "?"; ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="<?= base_url('dashboard/home-kasir'); ?> "
                                                                class="btn btn-secondary">kembali</a>
                                                            <a href="<?= base_url('dashboard/delete') . '/' . $item['id_menu'] ?> "
                                                                class="btn btn-danger">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++;
                                    endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
        </div>
    </div>
</body>