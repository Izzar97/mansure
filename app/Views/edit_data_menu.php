<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Menu Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <div class="container">
        <form action="<?= base_url('proses_edit_menu') ?>" method="post">
            <input type="hidden" class="form-control" id="id_menu" name="id_menu" value="<?= $data_menu->id_menu ?>">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Menu</label>
                <input type="text" class="form-control" id="nama_menu" name="nama_menu" placeholder="Silahkan masukkan nama" value="<?= $data_menu->nama_menu ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jenis Menu</label>
                <select class="form-select" id="jenis_menu" name="jenis_menu" value="<?= $data_menu->jenis_menu ?>">
                    <!-- <option selected>Pilih Jenis Menu</option> -->
                    <option value="unca'an">Unca'an Mansure</option>
                    <option value="pasta">Pasta</option>
                    <option value="beverages">Beverages</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?= $data_menu->harga ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Status Menu</label>
                <select class="form-control" id="status_stok_menu" name="status_stok_menu" value="<?= $data_menu->status_stok_menu ?>">
                    <option value="tersedia">Tersedia</option>
                    <option value="kosong">Kosong</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $data_menu->deskripsi ?>">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>
        </form>
        <a href="<?= base_url('menu_admin'); ?>" class="btn btn-secondary">Kembali</a>
    </div>
    
  </body>
</html>