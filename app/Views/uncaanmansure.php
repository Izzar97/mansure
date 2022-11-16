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

    <section class="page-menu" id="row_menu_detail">
        <div class="container-page">
            <div class="row gy-3">
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/jakarta.png'); ?>" alt="KOPI" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Nasi Goreng Mansure</b>
                            </div>
                            <p class="menu-deskripsi">Nasi Goreng + Sayuran</p>
                            <p class="menu-harga">Rp. 38.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <!--/ .col-xs-12 -->
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/wanasari.png'); ?>" alt="KOPI" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Bergen Beef Blackpepper</b>
                            </div>
                            <p class="menu-deskripsi">Nasi Daging Sapi dengan saus blackpepper</p>
                            <p class="menu-harga">Rp. 36.000 </p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/purbaratu.png'); ?>" alt="KOPI" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Mie Djawa Mansure</b>
                            </div>
                            <p class="menu-deskripsi">Mie dengan kuah yang sedap </p>
                            <p class="menu-harga">Rp. 29.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
            </div>
        </div>
    </section>
</body>