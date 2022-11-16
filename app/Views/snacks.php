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
                        <img src="<?= base_url('img/tahuwalik.png'); ?>" alt="tahu" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Tahu Walik</b>
                            </div>
                            <p class="menu-deskripsi">Tahu goreng</p>
                            <p class="menu-harga">Rp. 20.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <!--/ .col-xs-12 -->
                <div class="col-12 col-lg-4">
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
                    </div>
                    <!--/ .menu-item -->
                </div>
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
                    </div>
                    <!--/ .menu-item -->
                </div>
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
                    </div>
                    <!--/ .menu-item -->
                </div>
                <!--/ .col-xs-12 -->
                <div class="col-12 col-lg-4">
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
                    </div>
                    <!--/ .menu-item -->
                </div>
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
                    </div>
                    <!--/ .menu-item -->
                </div>
            </div>
        </div>
    </section>
</body>