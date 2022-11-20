<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>+</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <div class="container">
        <form action="<?= base_url('daftarmenu') ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Menu</label>
                <input type="text" class="form-control" id="nama_menu" name="nama_menu" placeholder="Silahkan masukkan nama">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jenis Menu</label>
                <select class="form-select" aria-label="Default select example" id="jenis_menu" name="jenis_menu">
                    <option selected>Pilih Jenis Menu</option>
                    <option value="Main course">Main Course</option>
                    <option value="Unca'an">Unca'an Mansure</option>
                    <option value="Pasta">Pasta</option>
                    <option value="Snacks">Snacks</option>
                    <option value="Sweet Tooth">Sweet Tooth</option>
                    <option value="Beverages">Beverages</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="Silahkan masukkan harga">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="custom-file-label">Upload Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Status Menu</label>
                <select class="form-select" aria-label="Default select example" id="status_stok_menu" name="status_stok_menu">
                    <option selected>Pilih Status Menu</option>
                    <option value="tersedia">Tersedia</option>
                    <option value="kosong">Kosong</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Silahkan masukkan deskripsi">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>
        </form>
        
        <a href="<?= base_url('home-kasir'); ?>" class="btn btn-secondary">Kembali</a>
    </div>

  </body>
</html>