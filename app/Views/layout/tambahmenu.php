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
                                <label for="exampleFormControlInput1" class="col-sm-2">Nama Menu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_menu" name="nama_menu"
                                        placeholder="Silahkan Masukkan Nama Menu" required>
                                </div>
                            </div>

                            <div class="mb-1 row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Jenis Menu</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="jenis_menu" name="jenis_menu"
                                        onchange="this.form.submit()">
                                        <option selected>Pilih Jenis Menu</option>
                                        <option value="Main course" onclick="text(6)">Main Course</option>
                                        <option value="Unca'an" onclick="text(5)">Unca'an Mansure</option>
                                        <option value="Pasta" onclick="text(4)">Pasta</option>
                                        <option value="Snacks" onclick="text(3)">Snacks</option>
                                        <option value="Sweet Tooth" onclick="text(2)">Sweet Tooth</option>
                                        <option value="Beverages" onclick="text(1)" cheked>Beverages</option>
                                    </select>
                                </div>
                            </div>
                            <?php
                            // if (isset($_POST['jenis_menu'])) {
                            //     $qry

                            ?>
                            <div class="mb-1 row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Jenis Beverages</label>
                                <div class="col-sm-10">
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
                            </div>
                            <?php  ?>

                            <div class="mb-1 row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="harga" name="harga"
                                        placeholder="Silahkan Masukkan Harga Menu" required>
                                </div>
                            </div>

                            <div class="mb-1 row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Status Menu</label>
                                <div class="col-sm-10">
                                    <select class="form-control" aria-label="Default select example"
                                        id="status_stok_menu" name="status_stok_menu">
                                        <option selected>Pilih Status Menu</option>
                                        <option value="tersedia">Tersedia</option>
                                        <option value="kosong">Kosong</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-1 row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Deskripsi Menu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                        placeholder="Silahkan Masukkan Deskripsi Menu" required>
                                </div>
                            </div>

                            <div class="mb-1 row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Upload
                                    Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" class="upload" id="gambar" name="gambar">
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
<script type="text/javascript">
// function text(Beverages) {
//     if (Beverages == true)
//         document.getElementById('jenis_beverages').style.display = 'block';
//     else
//         document.getElementById('jenis_beverages').style.display = 'none';
// }
// function text(Beverages) {
//     var str = '';
//     var val = document.getElementById('');
//     for (i = 0; i < val.length; i++) {
//         if (val[i].selected) {
//             str += val[i].value _ ',';
//         }
//     }
//     var str = str.slice(0, str.length -1);
//      $.ajax({
//      type="GET",
// url="ajax_get
// })
// }
</script>