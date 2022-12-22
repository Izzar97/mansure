<?php
include 'dashboard.php';
?>

<body>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="container-fluid">
                <section class="mt-2 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-pen mr-1"></i>
                                <b>Edit Menu Toko Mansure</b>
                            </h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <form action="<?= base_url('dashboard/update-menu/' . $product['id_menu']) ?>" method="post"
                                enctype="multipart/form-data">
                                <div class="mb-1 row">
                                    <label for="exampleFormControlInput1" class="col-sm-2">Nama Menu</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $product['nama_menu'] ?>"
                                            id="nama_menu" name="nama_menu">
                                    </div>
                                </div>

                                <div class="mb-1 row">
                                    <label for="exampleFormControlInput1" class="col-sm-2">Jenis Menu</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" aria-label="Default select example" id="jenis_menu"
                                            name="jenis_menu">
                                            <option value="Main course" <?php if ($product['jenis_menu'] == 'Main course') : echo 'selected';
                                                                        endif; ?>>Main Course</option>
                                            <option value="Unca'an" <?php if ($product['jenis_menu'] == "Unca'an") : echo 'selected';
                                                                    endif; ?>>Unca'an Mansure</option>
                                            <option value="Pasta" <?php if ($product['jenis_menu'] == 'Pasta') : echo 'selected';
                                                                    endif; ?>>Pasta</option>
                                            <option value="Snacks" <?php if ($product['jenis_menu'] == 'Snacks') : echo 'selected';
                                                                    endif; ?>>Snacks</option>
                                            <option value="Sweet Tooth" <?php if ($product['jenis_menu'] == 'Sweet Tooth') : echo 'selected';
                                                                        endif; ?>>Sweet Tooth</option>
                                            <option value="Beverages" <?php if ($product['jenis_menu'] == 'Beverages') : echo 'selected';
                                                                        endif; ?>>Beverages</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-1 row">
                                    <label for="exampleFormControlInput1" class="col-sm-2">Harga</label>
                                    <div class="col-sm-10">
                                        <input type="int" class="form-control" id="harga"
                                            value="Rp. <?= $product['harga'] ?>" name="harga">
                                    </div>
                                </div>

                                <div class="mb-1 row">
                                    <label for="exampleFormControlInput1" class="col-sm-2">Status Menu</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" aria-label="Default select example"
                                            id="status_stok_menu" name="status_stok_menu">
                                            <option value="tersedia" <?php if ($product['status_stok_menu'] == 'tersedia') : echo 'selected';
                                                                        endif; ?>>Tersedia</option>
                                            <option value="kosong" <?php if ($product['status_stok_menu'] == 'kosong') : echo 'selected';
                                                                    endif; ?>>Kosong</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-1 row">
                                    <label for="exampleFormControlInput1" class="col-sm-2">Deskripsi Menu</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                            value="<?= $product['deskripsi'] ?>">
                                    </div>
                                </div>

                                <div class="mb-1 row">
                                    <label for="exampleFormControlInput1" class="col-sm-2">Upload
                                        Gambar</label>
                                    <div class="col-sm-10">
                                        <img src="<?= base_url('uploads/' . $product['gambar']) ?>" width="100"
                                            height="100" alt="Product Image">
                                        <input type="file" class="upload" id="gambar" name="gambar"
                                            value="<?= $product['gambar'] ?>">
                                    </div>
                                </div>

                                <div style="float: right;">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="<?= base_url('dashboard/home-kasir'); ?>"
                                        class="btn btn-secondary">Kembali</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </section>
            </div>
        </div>

    </body>

    </html>