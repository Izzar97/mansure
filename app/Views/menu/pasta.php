<?php
include('menu.php');
?>

<body>
    <!-- <section class="page-menu" id="row_menu_detail">
        <div class="container-page">
            <div class="row gy-3">
                <?php //foreach ($products as $item) : ?>
                <div class="col-12 col-lg-4">
                    <div class="menu-item">
                        <img src="<?php // "/uploads/" . $item['gambar']; ?>" alt="Carbonara" height="150" width="150">
                        <div class="menu-header" id="text_our_menu">
                            <div class="h2">
                                <b><?php // $item['nama_menu']; ?> </b>
                            </div>
                            <p class="menu-deskripsi"><?php // $item['deskripsi']; ?> </p>
                            <p class="menu-harga">Rp. <?php // $item['harga']; ?> </p>
                            <?php // if($item['status_stok_menu'] == 'kosong'){
                                //echo "<button type='button' class='btn btn-secondary' disabled>Kosong</button>";
                            //} else {
                                ?> <a href="<?php // base_url('beli'.'/'. $item['id_menu']) ?>" class="btn btn-secondary">Pilih</a> <?php 
                           // } ?>                        
                        </div>
                    </div>
                </div> -->
                <?php //endforeach ?>

            <!-- </div>
        </div>
    </section> --> 




    <h2>Daftar Menu</h2>
<?php
    foreach ($products as $item) {
?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="kotak">
              <form method="post" action="<?php echo base_url('shopping/tambah'.'/'. $item['id_menu']);?>" method="post" accept-charset="utf-8">
                <img class="img-thumbnail" src="<?= "/uploads/" . $item['gambar']; ?>">
                <div class="card-body">
                  <h4 class="card-title">
                    <?= $item['nama_menu']; ?>
                  </h4>
                  <h5>Rp. <?= $item['harga']; ?></h5>
                  <p class="card-text"><?= $item['deskripsi'];?></p>
                </div>
                <div class="card-footer"> 
                  <input type="hidden" name="id_menu" value="<?= $item["id_menu"] ?>" />
                  <input type="hidden" name="nama_menu" value="<?= $item['nama_menu']; ?>" />
                  <input type="hidden" name="harga" value="<?= $item["harga"] ?>" />
                  <input type="hidden" name="quantity" value="1" />
                  <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Beli</button>
                </div>
                </form>
              </div>
            </div>
<?php
    }
?>



</body>