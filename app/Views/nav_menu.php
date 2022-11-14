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
}

.container-page {

    margin-top: 50px;
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
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3 menu-height">
                    <div class="divage--menu__item">
                        <img src="<?= base_url('img/jakarta.png'); ?>" class="mb12" alt="KOPI" height="250" width="250">
                        <div class="page--about__header" id="text_our_menu"
                            style="text-align: center; padding-left:15px;padding-right:15px;">
                            <div class="h2">
                                <b>Jakarta</b>
                            </div>
                            <p class="detail_menu_tittle">Nasi Goreng Pedas Manis, Karage, Telur, Sayuran</p>
                        </div>
                    </div>
                    <!--/ .page--menu__item -->
                </div>
                <!--/ .col-xs-12 -->
                <div class="col-xs-12 col-sm-4 col-md-3 menu-height">
                    <div class="page--menu__item">
                        <img src="<?= base_url('img/wanasari.png'); ?>" class="mb12" alt="KOPI" height="250"
                            width="250">
                        <div class="page--about__header" id="text_our_menu"
                            style="text-align: center; padding-left:15px;padding-right:15px;">
                            <div class="h2">
                                <b>Wanasari</b>
                            </div>
                            <p class="detail_menu_tittle">Nasi Ayam Crispy, Salted Egg, Telur, Sayuran</p>
                        </div>
                    </div>
                    <!--/ .page--menu__item -->
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 menu-height">
                    <div class="page--menu__item">
                        <img src="<?= base_url('img/canggu.png'); ?>" class="mb12" alt="KOPI" height="250" width="250">
                        <div class="page--about__header" id="text_our_menu"
                            style="text-align: center; padding-left:15px;padding-right:15px;">
                            <div class="h2">
                                <b>Canggu</b>
                            </div>
                            <p class="detail_menu_tittle">Nasi Ayam Crispy, Sambal Matah, Telur, Sayuran</p>
                        </div>
                    </div>
                    <!--/ .page--menu__item -->
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 menu-height">
                    <div class="page--menu__item">
                        <img src="<?= base_url('img/dotonbori.png'); ?>" class="mb12" alt="KOPI" height="250"
                            width="250">
                        <div class="page--about__header" id="text_our_menu"
                            style="text-align: center; padding-left:15px;padding-right:15px;">
                            <div class="h2">
                                <b>Dotonbori</b>
                            </div>
                            <p class="detail_menu_tittle">Nasi, Beef Teriyaki, Sayuran</p>
                        </div>
                    </div>
                    <!--/ .page--menu__item -->
                </div>
            </div>
        </div>
    </section>
</body>