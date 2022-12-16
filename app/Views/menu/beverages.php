<?php
include('menu.php');
?>

<body>
    <section class="page-menu" id="row_menu_detail">
        <div class="container-page">
            <div class="row gy-3">
                <!-- Coffee -->
                <h3>Coffee</h3>
                <?php foreach ($products as $item) : ?>
                <?php if ($item['jenis_beverages'] == 'Coffee') : ?>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= "/uploads/" . $item['gambar']; ?>" alt="espresso" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b><?= $item['nama_menu']; ?></b>
                            </div>
                            <p class="menu-deskripsi"><?= $item['deskripsi']; ?></p>
                            <p class="menu-harga">Rp. <?= $item['harga']; ?></p>
                            <?php if($item['status_stok_menu'] == 'kosong'){
                                echo "<button type='button' class='btn btn-secondary' disabled>Kosong</button>";
                            } else {
                                ?> <a href="<?= base_url('beli'.'/'. $item['id_menu']) ?>" class="btn btn-secondary">Pilih</a> <?php 
                            } ?>                        
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <?php endif; ?>
                <?php endforeach ?>

                <!-- Ice Coffee Milk -->
                <h3> Ice Coffee Milk </h3>
                <!--/ .menu-item -->
                <?php foreach ($products as $item) : ?>
                <?php if ($item['jenis_beverages'] == 'Coffee Milk') : ?>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= "/uploads/" . $item['gambar']; ?>" alt="espresso" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b><?= $item['nama_menu']; ?></b>
                            </div>
                            <p class="menu-deskripsi"><?= $item['deskripsi']; ?></p>
                            <p class="menu-harga">Rp. <?= $item['harga']; ?></p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <?php endif; ?>
                <?php endforeach ?>

                <!-- Mansure Signature -->
                <h3>Mansure Signature</h3>
                <?php foreach ($products as $item) : ?>
                <?php if ($item['jenis_beverages'] == 'Mansure Signature') : ?>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= "/uploads/" . $item['gambar']; ?>" alt="espresso" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b><?= $item['nama_menu']; ?></b>
                            </div>
                            <p class="menu-deskripsi"><?= $item['deskripsi']; ?></p>
                            <p class="menu-harga">Rp. <?= $item['harga']; ?></p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <?php endif; ?>
                <?php endforeach ?>

                <!-- Tea -->
                <h3>Tea</h3>
                <?php foreach ($products as $item) : ?>
                <?php if ($item['jenis_beverages'] == 'Tea') : ?>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= "/uploads/" . $item['gambar']; ?>" alt="espresso" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b><?= $item['nama_menu']; ?></b>
                            </div>
                            <p class="menu-deskripsi"><?= $item['deskripsi']; ?></p>
                            <p class="menu-harga">Rp. <?= $item['harga']; ?></p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <?php endif; ?>
                <?php endforeach ?>

                <!-- Mojito -->
                <h3>Mojito</h3>
                <?php foreach ($products as $item) : ?>
                <?php if ($item['jenis_beverages'] == 'Mojito') : ?>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= "/uploads/" . $item['gambar']; ?>" alt="espresso" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b><?= $item['nama_menu']; ?></b>
                            </div>
                            <p class="menu-deskripsi"><?= $item['deskripsi']; ?></p>
                            <p class="menu-harga">Rp. <?= $item['harga']; ?></p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <?php endif; ?>
                <?php endforeach ?>

                <!-- Mineral -->
                <h3>Mineral</h3>
                <?php foreach ($products as $item) : ?>
                <?php if ($item['jenis_beverages'] == 'Mineral') : ?>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= "/uploads/" . $item['gambar']; ?>" alt="espresso" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b><?= $item['nama_menu']; ?></b>
                            </div>
                            <p class="menu-deskripsi"><?= $item['deskripsi']; ?></p>
                            <p class="menu-harga">Rp. <?= $item['harga']; ?></p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <?php endif; ?>
                <?php endforeach ?>

            </div>
        </div>
        </div>
        </div>
    </section>
</body>