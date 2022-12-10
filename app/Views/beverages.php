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

h3 {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color: maroon;
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
                    <option value="<?= base_url('menu/snacks') ?>">Snacks</option>
                    <option value="<?= base_url('menu/sweetooth') ?>">Sweet Tooth</option>
                    <option value="<?= base_url('menu/beverages') ?>" selected>Beverages</option>
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
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div>
                    <!--/ .menu-item -->
                </div>
                <?php endif; ?>
                <?php endforeach ?>
                <!--/ .col-xs-12 -->
                <!-- <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/americano.png'); ?>" alt="americano" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Americano</b>
                            </div>
                            <p class="menu-deskripsi">Kopi sedikit manis</p>
                            <p class="menu-harga">Rp. 22.000 </p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/tubruk.png'); ?>" alt="tubruk" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Tubruk</b>
                            </div>
                            <p class="menu-deskripsi">Kopi tubruk</p>
                            <p class="menu-harga">Rp. 16.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div> -->
                <!-- <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/caffelatte.png'); ?>" alt="caffelatte" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Caffe Latte</b>
                            </div>
                            <p class="menu-deskripsi">Kopi manis, semanis aku</p>
                            <p class="menu-harga">Rp. 22.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div> -->
                <!--/ .col-xs-12 -->
                <!-- <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/cappucino.png'); ?>" alt="cappucino" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Cappucino</b>
                            </div>
                            <p class="menu-deskripsi">Kopi sedikit cino</p>
                            <p class="menu-harga">Rp. 23.000 </p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4"> -->
                <!-- <div class="menu-item">
                        <img src="<?= base_url('img/caramel.png'); ?>" alt="caramel" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Caramel Latte</b>
                            </div>
                            <p class="menu-deskripsi">Kopi dengan rasa karamel</p>
                            <p class="menu-harga">Rp. 23.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div> -->

                <!-- Ice Coffee Milk -->
                <h3> Ice Coffee Milk </h3>
                <!-- <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/mansure.png'); ?>" alt="mansure" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Mansure</b>
                            </div>
                            <p class="menu-deskripsi">Susu dengan perpaduan espresso dan madu</p>
                            <p class="menu-harga">Rp. 23.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div>
                </div> -->
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

                <!-- <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/enggal.png'); ?>" alt="enggal" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Enggal</b>
                            </div>
                            <p class="menu-deskripsi">Susu dengan perpaduan espresso dan butterscotch</p>
                            <p class="menu-harga">Rp. 21.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/xawi.png'); ?>" alt="xawi" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>X Awi</b>
                            </div>
                            <p class="menu-deskripsi">Susu dengan perpaduan espresso dan palm sugar</p>
                            <p class="menu-harga">Rp. 20.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/kiluan.png'); ?>" alt="kiluan" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Kiluan</b>
                            </div>
                            <p class="menu-deskripsi">Susu dengan perpaduan espresso dan tiramisu</p>
                            <p class="menu-harga">Rp. 23.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/tamin.png'); ?>" alt="tamin" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Tamin</b>
                            </div>
                            <p class="menu-deskripsi">Susu dengan perpaduan double espresso</p>
                            <p class="menu-harga">Rp. 20.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div> -->

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
                <!-- <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/sriwedari.png'); ?>" alt="sriwedari" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Sriwedari</b>
                            </div>
                            <p class="menu-deskripsi">Minuman rasa Jasmine Tea dengan Passion Fruit
                                dan Cherry
                                Blossom</p>
                            <p class="menu-harga">Rp. 23.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/Kirana.png'); ?>" alt="Kirana" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Kirana</b>
                            </div>
                            <p class="menu-deskripsi">Minuman rasa Hibicius Tea dengan Green
                                Apple, Pineapple
                                dan Mint</p>
                            <p class="menu-harga">Rp. 23.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/Aruna.png'); ?>" alt="Aruna" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Aruna</b>
                            </div>
                            <p class="menu-deskripsi">Minuman rasa Hibicius Tea dengan
                                Grape, Cranberry
                                dan Mint</p>
                            <p class="menu-harga">Rp. 24.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/Wening.png'); ?>" alt="Wening" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Wening</b>
                            </div>
                            <p class="menu-deskripsi">Minuman rasa Cheese Cake dengan
                                Pinneapple, Honey dan Lemon</p>
                            <p class="menu-harga">Rp. 23.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/Renjana.png'); ?>" alt="Renjana" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Renjana</b>
                            </div>
                            <p class="menu-deskripsi">Minuman rasa Soursoup dengan
                                Blue Citrus, Lemon dan Ginger</p>
                            <p class="menu-harga">Rp. 22.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/Askara.png'); ?>" alt="Askara" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Askara</b>
                            </div>
                            <p class="menu-deskripsi">Minuman rasa Espresso
                                dengan Lemon, Peach dan Cream</p>
                            <p class="menu-harga">Rp. 24.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/Gayatri.png'); ?>" alt="Gayatri" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Gayatri</b>
                            </div>
                            <p class="menu-deskripsi">Minuman rasa Coldbrew
                                dengan Cranberry, Green Apple dan Soda</p>
                            <p class="menu-harga">Rp. 23.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/Lingga.png'); ?>" alt="Lingga" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Lingga</b>
                            </div>
                            <p class="menu-deskripsi">Minuman rasa
                                Espresso, Orange, Mint dan Soda</p>
                            <p class="menu-harga">Rp. 23.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/Kusuma.png'); ?>" alt="Kusuma" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Kusuma</b>
                            </div>
                            <p class="menu-deskripsi">Minuman rasa
                                Green Tea Leaves dengan Lemon</p>
                            <p class="menu-harga">Rp. 22.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div> -->

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
                <!-- <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/Lychee.png'); ?>" alt="Lychee" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Lychee Tea</b>
                            </div>
                            <p class="menu-deskripsi">Minuman
                                teh rasa Lychee</p>
                            <p class="menu-harga">Rp. 19.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/Peach.png'); ?>" alt="Peach" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Peach Tea</b>
                            </div>
                            <p class="menu-deskripsi">
                                Minuman teh rasa Peach</p>
                            <p class="menu-harga">Rp. 19.000
                            </p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/Lemon.png'); ?>" alt="Lemon" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Lemon Tea</b>
                            </div>
                            <p class="menu-deskripsi">
                                Minuman teh rasa Lemon
                            </p>
                            <p class="menu-harga">Rp.
                                19.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div> -->

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

                <!-- <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/Basicmojito.png'); ?>" alt="Basic" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Basic Mojito</b>
                            </div>
                            <p class="menu-deskripsi">
                                Minuman mojito rasa
                                Basic</p>
                            <p class="menu-harga">
                                Rp. 23.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/Lycheemojito.png'); ?>" alt="Lychee" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Lychee
                                    Mojito</b>
                            </div>
                            <p class="menu-deskripsi">
                                Minuman mojito
                                rasa Lychee</p>
                            <p class="menu-harga">
                                Rp. 25.000</p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/Lagoonmojito.png'); ?>" alt="Lagoon" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Lagoon
                                    Mojito</b>
                            </div>
                            <p class="menu-deskripsi">
                                Minuman
                                mojito rasa
                                Lagoon</p>
                            <p class="menu-harga">
                                Rp. 24.000
                            </p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/Kiwimojito.png'); ?>" alt="Kiwi" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Kiwi
                                    Mojito</b>
                            </div>
                            <p class="menu-deskripsi">
                                Minuman
                                mojito
                                rasa
                                Kiwi</p>
                            <p class="menu-harga">
                                Rp.
                                24.000
                            </p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div> -->
                <!--/ .menu-item -->
                <!-- </div> -->

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

                <!-- <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/Aqua.png'); ?>" alt="Aqua" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Aqua
                                    330ml</b>
                            </div>
                            <p class="menu-deskripsi">Minuman mojito rasa Aqua</p> -->
                <!-- <p class="menu-harga">
                                Rp.
                                7.000
                            </p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div>  -->
                <!--/ .menu-item -->
                <!-- </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?= base_url('img/Mineral.png'); ?>" alt="Mineral" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b>Mineral
                                    500ml</b>
                            </div>
                            <p class="menu-deskripsi">Minuman mojito rasa Mineral</p>
                             <p class="menu-harga">
                                Rp.
                                10.000
                            </p>
                            <button type="button" class="btn btn-secondary">Pilih</button>
                        </div>
                    </div>  -->
                <!--/ .menu-item -->
            </div>
        </div>
        </div>
        </div>
    </section>
</body>