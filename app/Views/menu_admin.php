<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu toko mansure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>ini halaman kasir ya</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <a href="<?= base_url('add_data_menu') ?>" class="btn btn-primary">Tambah Menu</a>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Menu</th>
                <th scope="col">Harga</th>
                <th scope="col">Status Menu</th>
                <th scope="col">Gambar</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($all_data_menu as $menu) : ?>
              <tr>
                <td><?= $menu->id_menu; ?></td>
                <td><?= $menu->nama_menu; ?></td>
                <td><?= $menu->jenis_menu; ?></td>
                <td>Rp. <?= $menu->harga; ?></td>
                <td><?= $menu->status_stok_menu; ?></td>
                <td><?= $menu->gambar; ?></td>
                <td><?= $menu->deskripsi; ?></td>
                <td>
                  <a href="<?= base_url('edit_data_menu').'/'.$menu->id_menu ?>" class="btn btn-warning">Edit</a>
                  <a href="<?= base_url('hapus_data_menu').'/'.$menu->id_menu ?>" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
              <?php endforeach ?>
        </tbody>
    
      </table>
  </body>
</html>