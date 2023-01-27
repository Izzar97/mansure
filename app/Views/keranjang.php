

<style>
.form-inline {
    float: right;
    padding-top: 10px;
    padding-right: 10px;
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

<head>
    <title>Toko Mansure | Menu</title>
</head>

<html>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous">
        </script>
        
        <form method="post" action="<?= base_url('cart/update')?>">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>no</th>
                        <th>nama</th>
                        <th>harga</th>
                        <th>jumlah <input type="submit" value="Update"></th>
                        <th>notes</th>
                        <th>Sub total</th>
                        <th>aksi</th>
                        <th rowspan="6">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <input type="text" name="nama_pelanggan"> -->
                    <?php 
                        $x = 1;
                        if($items): 
                        foreach($items as $item_menu): 
                    ?>
                    <tr>
                        <td><?= $x?></td>
                        <td>                                    
                            <input type="hidden" name="id_menu[]" value="<?= $item_menu["id_menu"] ?>"><?= $item_menu['nama_menu'] ?>
                        </td>
                        <td>                                    
                            <input type="hidden" id="harga-<?= $x ?>" value="<?= $item_menu["harga"] ?>">Rp. <?= $item_menu['harga'] ?>
                        </td>
                        <td>
                            <input type="number" min="1" value="<?= $item_menu['quantity'] ?>" style="width: 50px;" name="quantity[]">
                        </td>
                        <td>
                            <input type="text" name="notes_pesanan" value="<?= $notes?>">
                        </td>
                        <td><input type="hidden" name="total_harga_per_menu[]" value="<?= $item_menu['harga'] * $item_menu['quantity'] ?>">Rp. <?= $item_menu['harga'] * $item_menu['quantity'] ?></td>
                        <td><a href="<?= base_url('cart/remove').'/'.$item_menu['id_menu'] ?>" class="btn btn-danger">X</a></td>
                        <td colspan="5"><input type="hidden" name="total_list_pesanan" value="<?= $total ?>">Rp. <?= $total ?></td>
                    </tr>
                    <?php 
                        $x++;
                        endforeach;
                        endif 
                    ?>
                </tbody>
            </table>
        </form>
            <form action="<?= base_url('cart/simpan') ?>" method="post">
            <?php 
                        if($items): 
                        foreach($items as $item_menu): 
                    ?>
                    <tr>
                        <td>                                    
                            <input type="hidden" name="id_menu[]" value="<?= $item_menu["id_menu"] ?>">
                        </td>
                        <td>                                    
                            <input type="hidden" id="harga-<?= $x ?>" value="<?= $item_menu["harga"] ?>">
                        </td>
                        <td>
                            <input type="hidden" min="1" value="<?= $item_menu['quantity'] ?>" style="width: 50px;" name="quantity[]">
                        </td>
                        <td>
                            <input type="hidden" name="notes_pesanan[]" >
                        </td>
                        <td><input type="hidden" name="total_harga_per_menu[]" value="<?= $item_menu['harga'] * $item_menu['quantity'] ?>"></td>
                        <td colspan="5"><input type="hidden" name="total_list_pesanan" value="<?= $total ?>"></td>
                    </tr>
                    <?php 
                        
                        endforeach;
                        endif 
                    ?>
                <button type="submit">simpan</button>
            </form>
    </body>
</html>