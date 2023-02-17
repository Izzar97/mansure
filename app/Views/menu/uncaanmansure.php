<?php
include('menu.php');
?>

<body>
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