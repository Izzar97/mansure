<?php
include 'navbar.php';
?>
<style>
.form-inline {
    float: right;
}

.select {
    /* width: 100%; */
    font-weight: 300;
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

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <div class="form">
        <form class="form-inline" role="form" method="post" action="">
            <div class="form-group">
                <label class="label">Sort by:</label>
                <select id="filter" class="select-menu">
                    <option value="<?= base_url('menu') ?>">Main Course</option>
                    <option value="<?= base_url('menu/uncaanmansure') ?>">Unca'an Mansure</option>
                    <option value="<?= base_url('menu/pasta') ?>">Pasta</option>
                    <option value="<?= base_url('menu/snacks') ?>" selected>Snacks</option>
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
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= "/uploads/" . $item['gambar']; ?>" alt="tahu" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b><?= $item['nama_menu'] ?></b>
                            </div>
                            <p class="menu-deskripsi"><?= $item['deskripsi'] ?></p>
                            <p class="menu-harga">Rp. <?= $item['harga'] ?></p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <?php endforeach ?>
                <!--/ .col-xs-12 -->
                <!-- <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/cireng.png'); ?>" alt="aci" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Cireng</b>
                            </div>
                            <p class="menu-deskripsi">Aci di goreng</p>
                            <p class="menu-harga">Rp. 20.000 </p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/pisang.png'); ?>" alt="pisang" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Pisang Goreng</b>
                            </div>
                            <p class="menu-deskripsi">Pisang yang digoreng</p>
                            <p class="menu-harga">Rp. 22.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/tempe.png'); ?>" alt="tempe" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Tempe Mendoan</b>
                            </div>
                            <p class="menu-deskripsi">Tempe digoren</p>
                            <p class="menu-harga">Rp. 21.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div> -->
                <!--/ .col-xs-12 -->
                <!-- <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/kentang.png'); ?>" alt="kentang" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Kentang Goreng</b>
                            </div>
                            <p class="menu-deskripsi">kentang di goreng</p>
                            <p class="menu-harga">Rp. 23.000 </p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/platter.png'); ?>" alt="platter" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Mansure Platter</b>
                            </div>
                            <p class="menu-deskripsi">Ketang Sosis dan onion ring</p>
                            <p class="menu-harga">Rp. 28.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div> -->
            </div>
        </div>
    </section>
</body>