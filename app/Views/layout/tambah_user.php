<?php
include 'dashboard.php';
?>

<body>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-6 connectedSortable">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-user mr-1"></i>
                                <b>Tambah User</b>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= base_url('dashboard/daftaruser') ?>" method="post"
                                enctype="multipart/form-data">
                                <div class="mb-1 row">
                                    <label for="exampleFormControlInput1" class="col-sm-3">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama_user" name="nama_user"
                                            placeholder="Silahkan Masukkan Nama">
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <label for="exampleFormControlInput1" class="col-sm-3">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="Silahkan Masukkan Username">
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <label for="exampleFormControlInput1" class="col-sm-3">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Silahkan Masukkan Password">
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <label for="exampleFormControlInput1" class="col-sm-3">Jabatan</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" aria-label="Default select example" id="jabatan"
                                            name="jabatan">
                                            <option selected>Pilih</option>
                                            <option value="kasir">Kasir</option>
                                            <option value="chef">Chef</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success" style="float: right;">Simpan</button>
                                </div>
                            </form>
                        </div>
                </section>

                <section class="col-lg-6 connectedSortable">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-users mr-1"></i>
                                <b>Users</b>
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body" style="padding-top: 10px;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $item) : ?>
                                    <?php if ($item['jabatan']) : ?>
                                    <tr>
                                        <td><?= $item['nama_user'] ?></td>
                                        <td><?= $item['username'] ?></td>
                                        <td><?= $item['jabatan'] ?></td>
                                        <td>
                                            <!-- <button type="button" class="btn btn-danger fas fa-trash-alt"></button> -->
                                            <button type="button" class="btn btn-danger fas fa-trash-alt"
                                                data-bs-toggle="modal" data-bs-target="#hapus_<?= $item['id'] ?>">
                                            </button>

                                            <!-- modal hapus -->
                                            <div class="modal fade" id="hapus_<?= $item['id'] ?>" tabindex="-1"
                                                aria-labelledby="hapusmodal" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <?php echo "Apakah Anda Yakin Ingin Menghapus " . $item['nama_user'] . "?"; ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="<?= base_url('dashboard/tambah-user'); ?> "
                                                                class="btn btn-secondary">Kembali</a>
                                                            <a href="<?= base_url('dashboard/hapus_user')  . '/' . $item['id'] ?> "
                                                                class="btn btn-danger">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>