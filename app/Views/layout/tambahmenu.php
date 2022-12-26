<?php
include 'dashboard.php';
?>


<body>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="container-fluid">
            <section class=" mt-2 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-plus mr-1"></i>
                            <b>Tambah Menu Toko Mansure</b>
                        </h3>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <h4>Notes</h4>
                            </hr />
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                        <?php endif; ?>

                        <form method="POST" action="<?= base_url('/dashboard/daftarmenu') ?>"
                            enctype="multipart/form-data">
                            <div class="mb-1 row">
                                <label for="exampleFormControlInput1" class="col-sm-3">Nama Menu</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="nama_menu" name="nama_menu"
                                        placeholder="Silahkan Masukkan Nama Menu" required>
                                </div>
                                <span class="col-sm-3">
                                    ex: Jakarta
                                </span>
                            </div>

                            <div class="mb-1 row">
                                <label for="exampleFormControlInput1" class="col-sm-3">Jenis Menu</label>
                                <div class="col-sm-6">
                                    <select class="form-control" id="jenis_menu" name="jenis_menu" required>
                                        <option selected>Pilih Jenis Menu</option>
                                        <option value="Main course" >Main Course</option>
                                        <option value="Unca'an" >Unca'an Mansure</option>
                                        <option value="Pasta" >Pasta</option>
                                        <option value="Snacks" >Snacks</option>
                                        <option value="Sweet Tooth" >Sweet Tooth</option>
                                        <option value="Beverages">Beverages</option>
                                    </select>
                                </div>
                                <span class="col-sm-3">
                                    ex: Main Course
                                </span>
                            </div>
                           
                            <div class="mb-1 row">
                                <label for="exampleFormControlInput1" class="col-sm-3">Jenis Beverages</label>
                                <div class="col-sm-6">
                                    <select class="form-control" id="jenis_beverages" name="jenis_beverages">
                                        <option selected>Pilih Jenis Beverages</option>
                                        <option value="Coffee">Coffee</option>
                                        <option value="Coffee Milk">Coffee Milk</option>
                                        <option value="Mansure Signature">Mansure Signature</option>
                                        <option value="Tea">Tea</option>
                                        <option value="Mojito">Mojito</option>
                                        <option value="Mineral">Mineral</option>
                                    </select>
                                </div>
                                <span class="col-sm-3">
                                    ex: Mojito
                                </span>
                            </div>

                            <div class="mb-1 row">
                                <label for="exampleFormControlInput1" class="col-sm-3">Harga</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="harga" name="harga" value="Rp. "
                                        required>
                                </div>
                                <span class="col-sm-3">
                                    ex: Rp. 30.000
                                </span>
                            </div>

                            <div class="mb-1 row">
                                <label for="exampleFormControlInput1" class="col-sm-3">Status Menu</label>
                                <div class="col-sm-6">
                                    <select class="form-control" aria-label="Default select example"
                                        id="status_stok_menu" name="status_stok_menu">
                                        <option selected>Pilih Status Menu</option>
                                        <option value="tersedia">Tersedia</option>
                                        <option value="kosong">Kosong</option>
                                    </select>
                                </div>
                                <span class="col-sm-3">
                                    ex: Tersedia
                                </span>
                            </div>

                            <div class="mb-1 row">
                                <label for="exampleFormControlInput1" class="col-sm-3">Deskripsi Menu</label>
                                <div class="col-sm-6">
                                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"
                                        placeholder="Silahkan Masukkan Deskripsi Menu" required></textarea>
                                </div>
                                <span class="col-sm-3">
                                    ex: Nasi Goreng dengan ikan bakar asoy
                                </span>
                            </div>

                            <div class="mb-1 row">
                                <label for="exampleFormControlInput1" class="col-sm-3">Upload
                                    Gambar</label>
                                <div class="col-sm-6">
                                    <input type="file" class="upload" id="gambar" name="gambar" required>
                                </div>
                            </div>

                            <div style="float: right;">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="<?= base_url('dashboard/home-kasir'); ?>" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

</body>
