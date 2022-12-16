<?php
include('navbar.php');
?>
<style>
.form-inline {
    float: right;
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

.container {
    margin-left: 40px;
    margin-right: 40px;
    padding-left: 0px;
    padding-right: 0px;
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

    <div class="form">
        <form class="form-inline" role="form" method="post" action="">
            <div class="form-group">
                <label class="label">Sort by:</label>
                <select id="filter" class="select-menu">
                    <option value="Pilih">Pilih</option>
                    <option value="<?= base_url('menu') ?>">Main Course</option>
                    <option value="<?= base_url('menu/uncaanmansure') ?>" >Unca'an Mansure</option>
                    <option value="<?= base_url('menu/pasta') ?>" >Pasta</option>
                    <option value="<?= base_url('menu/snacks') ?>" >Snacks</option>
                    <option value="<?= base_url('menu/sweetooth') ?>" >Sweet Tooth</option>
                    <option value="<?= base_url('menu/beverages') ?>" >Beverages</option>
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
    <br>

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