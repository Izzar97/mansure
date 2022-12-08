<?php
include 'navbar.php';
?>
<style>
.form-inline {
    float: right;
    padding-top: 10px;
    padding-right: 10px;
}

.select {
    /* width: 100%; */
    font-weight: 300;
    margin-right: 30px;
}

.label {
    font-weight: 500;
    margin-bottom: auto;
    margin-top: 30;

}

.page-menu {
    margin-left: 40px;
    margin-right: 40px;
}

.container-page {
    margin-top: 50px;
}

.h2 {
    margin-bottom: 0px;
}

.menu-deskripsi {
    margin-bottom: 0px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
}

.menu-harga {
    margin-bottom: 0px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
}

.menu-item {
    text-align: center;
}
</style>

<head>
    <title>Toko Mansure | Menu</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous">
    </script>
    <button type="button" style="float: right;" class="btn btn-dark fas fa-trash-alt" data-bs-toggle="modal"
        data-bs-target="#modalKeranjang">Keranjang
    </button>

    <!-- modal keranjang -->
    <div class="modal fade" id="modalKeranjang" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="col-sm-1.5">Nama</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nama_Pemesan" name="nama_Pemesan"
                            placeholder="Masukkan Nama Anda">
                    </div>

                    <label class="col-sm-1.5">No. Meja</label>
                    <div class="col-sm-1">
                        <input type="text" class="form-control" id="no_meja" name="no_meja" required>
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
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                        </table>

                        <div class="modal-footer">
                            <a href="<?= base_url('/menu'); ?>" class="btn btn-secondary">Kembali</a>
                            <a href="#" class="btn btn-success">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form">
        <form class="form-inline" role="form" method="post" action="">
            <div class="form-group">
                <label class="label">Sort by:</label>
                <select id="filter" class="select-menu">
                    <option value="<?= base_url('menu') ?>" selected>Main Course</option>
                    <option value="<?= base_url('menu/uncaanmansure') ?>">Unca'an Mansure</option>
                    <option value="<?= base_url('menu/pasta') ?>">Pasta</option>
                    <option value="<?= base_url('menu/snacks') ?>">Snacks</option>
                    <option value="<?= base_url('menu/sweetooth') ?>">Sweet Tooth</option>
                    <option value="<?= base_url('menu/beverages') ?>">Beverages</option>
                </select>
            </div>
        </form>
    </div>

    <script>
    $(document).ready(function() {
        $('#filter').on('change', function() {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
            return false;
        });
    });
    </script>

    <br>
    <section class="page-menu" id="row_menu_detail">
        <div class="container-page">
            <div class="row gy-3">
                <?php foreach ($products as $item) : ?>
                <div class=" col-12 col-lg-4">
                    <form action="" method="">
                        <div class="menu-item">
                            <img src="<?= "/uploads/" . $item['gambar']; ?>" height="150" width="150">
                            <div class="menu-header" id="text_our_menu">
                                <div class="h2">
                                    <b><?= $item['nama_menu'] ?></b>
                                </div>
                                <p class="menu-deskripsi"><?= $item['deskripsi'] ?></p>
                                <p class="menu-harga">Rp. <?= $item['harga'] ?></p>
                                <a href="<?= base_url('beli'. $item['id_menu']) ?>" class="btn btn-secondary">Pilih</a>
                            </div>
                        </div>
                    </form>
                    <!--/ .menu-item -->
                </div>
                <?php endforeach ?>
                <!--/ .col-xs-12 -->
                <!-- <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="#" alt="KOPI" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Wanasari</b>
                            </div>
                            <p class="menu-deskripsi">Nasi Ayam Crispy, Salted Egg, Telur, Sayuran</p>
                            <p class="menu-harga">Rp. 33.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div> -->
                <!-- <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="#" alt="KOPI" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Canggu</b>
                            </div>
                            <p class="menu-deskripsi">Nasi Ayam Crispy, Sambal Matah, Telur, Sayuran</p>
                            <p class="menu-harga">Rp. 30.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="#" alt="KOPI" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Dotonbori</b>
                            </div>
                            <p class="menu-deskripsi">Nasi, Beef Teriyaki, Sayuran</p>
                            <p class="menu-harga">Rp. 36.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="#" alt="KOPI" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Purbaratu</b>
                            </div>
                            <p class="menu-deskripsi">Nasi Ayam, Sambal Goreng, Tahu, Tempe</p>
                            <p class="menu-harga">Rp. 32.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="#" alt="KOPI" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Surakarta</b>
                            </div>
                            <p class="menu-deskripsi">Nasi Ayam Pedas Manis, Telur</p>
                            <p class="menu-harga">Rp. 32.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="#" alt="KOPI" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Bunaken</b>
                            </div>
                            <p class="menu-deskripsi">Nasi Ayam Woku, Telur, Sayuran</p>
                            <p class="menu-harga">Rp. 30.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div> -->
            </div>
        </div>
    </section>
</body>
<script>

</script>