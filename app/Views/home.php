<?php
include 'menu/navbar.php';
?>
<style>
body {
    background-image: url(img/bg3.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-position-y: 100pt;
    background-size: 100%;
    /* background-position-x: 40px; */
    background-attachment: fixed;
}

.container {
    padding-left: 50px;
    padding-top: 100px;
    color: white;
}

h1 {

    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif
}
</style>

<head>
    <title>Toko Mansure | Home</title>
</head>

<body>
    <div class="container">
        <h1 style="margin-bottom: 0px;">Toko Mansure</h1>
        <h6>Bukan Toko Bangunan </h6>
        <a class="btn btn-dark" href="<?= base_url('/menu') ?>">Order Now</a>
        <!-- <h6>Open 09.00 - 22.00</h6> -->
    </div>

    <section class="page-menu" id="row_menu_detail">
        <div class="container-page">
            <div class="row gy-3">
                <?php foreach ($products as $item) : ?>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= "/uploads/" . $item['gambar']; ?>" alt="ini gambar menu" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b><?= $item['nama_menu']; ?></b>
                            </div>
                            <p class="menu-deskripsi"><?= $item['deskripsi']; ?></p>
                            <p class="menu-harga">Rp. <?= $item['harga']; ?></p>
                            <?php if ($item['status_stok_menu'] == 'kosong') {
                                    echo "<button type='button' class='btn btn-secondary' disabled>Kosong</button>";
                                } else {
                                ?> <a href="<?= base_url('beli' . '/' . $item['id_menu']) ?>"
                                class="btn btn-secondary">Pilih</a>
                            <?php
                                } ?>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <?php endforeach ?>
            </div>
        </div>
        </div>
    </section>
</body>