<?php
include 'menu/navbar.php';
?>

<html>

<body>

    <body>

        <div class="card" style="margin-left: 40px; margin-right:40px;">
            <div class="card-header">
                <h3 class="card-title">
                    <b>Pesanan</b>
                </h3>
                <span>*Klik tombol Update setiap melakukan
                    perubahan</span>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="post" action="<?= base_url('cart/update') ?>">
                    <div class="table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Menu</th>
                                    <th>Harga</th>
                                    <th>Jumlah <input type="submit" value="Update"></th>
                                    <th>Notes</th>
                                    <th>Sub total</th>
                                    <!-- <th>Total</th> -->
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <!-- <input type="text" name="nama_pelanggan"> -->
                                <?php
                                $x = 1;
                                if ($items) :
                                    foreach ($items as $item_menu) :
                                        // var_dump($items);
                                        // die;
                                ?>
                                <tr>
                                    <td><?= $x ?></td>
                                    <td>
                                        <input type="hidden" name="id_menu[]"
                                            value="<?= $item_menu["id_menu"] ?>"><?= $item_menu['nama_menu'] ?>
                                    </td>
                                    <td>
                                        <input type="hidden" id="harga-<?= $x ?>" value="<?= $item_menu["harga"] ?>">Rp.
                                        <?= $item_menu['harga'] ?>
                                    </td>
                                    <td>
                                        <input type="number" min="1" value="<?= $item_menu['quantity'] ?>"
                                            style="width: 50px;" name="quantity[]">
                                    </td>
                                    <td><input type="text" name="notes_pesanan[]" value="<?= $item_menu['note'] ?>">
                                    </td>
                                    <td><input type="hidden" name="total_harga_per_menu[]"
                                            value="<?= $item_menu['harga'] * $item_menu['quantity'] ?>">Rp.
                                        <?= $item_menu['harga'] * $item_menu['quantity'] ?></td>
                                    <!-- <td><input type="hidden" name="total_list_pesanan" value="<?= $total ?>">Rp.
                                        <?= $total ?></td> -->
                                    <td><a href="<?= base_url('cart/remove') . '/' . $item_menu['id_menu'] ?>"
                                            class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                                </tr>
                                <?php
                                        $x++;
                                    endforeach;
                                endif;
                                ?>
                            </tbody>
                            <tfoot>
                                <td colspan="5"><b>Total Bayar</b></td>
                                <td><input type="hidden" name="total_list_pesanan" value="<?= $total ?>"><b>Rp.
                                        <?= $total ?></b></td>

                            </tfoot>
                        </table>
                    </div>
                </form>
            </div>
            <div class="card-footer" style="float:rigt;">
                <a href="<?= base_url('menu') ?>" class="btn btn-secondary">Kembali</a>
                <a href="<?= base_url('cart/tagihan') ?>" class="btn btn-warning">Selanjutnya</a>
            </div>


        </div>
    </body>

</html>