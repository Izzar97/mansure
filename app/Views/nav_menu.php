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
    <div class="form">
        <form class="form-inline" role="form" method="post" action="">
            <div class="form-group">
                <label class="label">Sort by:</label>
                <select class="select" required tabindex="1">
                    <option value="#" selected="selected">Main Course</option>
                    <option value="#">Unca'an Mansure</option>
                    <option value="#">Pasta</option>
                    <option value="#">Snacks</option>
                    <option value="#">Sweet Tooth</option>
                    <option value="#">Beverages</option>
                </select>
            </div>
        </form>
    </div>
    <section class="page-menu" id="row_menu_detail">
        <div class="container-page">
            <div class="row gy-3">
                <div class="col-4 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/jakarta.png'); ?>" class="mb12" alt="KOPI" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Jakarta</b>
                            </div>
                            <p class="menu-deskripsi">Nasi Goreng Pedas Manis, Karage, Telur, Sayuran</p>
                            <p class="menu-harga">Rp. 35.000</p>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <!--/ .col-xs-12 -->
                <div class="col-4 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/wanasari.png'); ?>" class="mb12" alt="KOPI" height="150"
                            width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Wanasari</b>
                            </div>
                            <p class="menu-deskripsi">Nasi Ayam Crispy, Salted Egg, Telur, Sayuran</p>
                            <p class="menu-harga">Rp. 33.000</p>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/canggu.png'); ?>" class="mb12" alt="KOPI" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Canggu</b>
                            </div>
                            <p class="menu-deskripsi">Nasi Ayam Crispy, Sambal Matah, Telur, Sayuran</p>
                            <p class="menu-harga">Rp. 30.000</p>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/dotonbori.png'); ?>" class="mb12" alt="KOPI" height="150"
                            width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Dotonbori</b>
                            </div>
                            <p class="menu-deskripsi">Nasi, Beef Teriyaki, Sayuran</p>
                            <p class="menu-harga">Rp. 36.000</p>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/purbaratu.png'); ?>" class="mb12" alt="KOPI" height="150"
                            width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Purbaratu</b>
                            </div>
                            <p class="menu-deskripsi">Nasi Ayam, Sambal Goreng, Tahu, Tempe</p>
                            <p class="menu-harga">Rp. 32.000</p>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/surakarta.png'); ?>" class="mb12" alt="KOPI" height="150"
                            width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Surakarta</b>
                            </div>
                            <p class="menu-deskripsi">Nasi Ayam Pedas Manis, Telur</p>
                            <p class="menu-harga">Rp. 32.000</p>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/bunaken.png'); ?>" class="mb12" alt="KOPI" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Bunaken</b>
                            </div>
                            <p class="menu-deskripsi">Nasi Ayam Woku, Telur, Sayuran</p>
                            <p class="menu-harga">Rp. 30.000</p>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
            </div>
        </div>
    </section>
</body>