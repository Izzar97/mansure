<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu</title>
</head>
<body>
    <h1>ini halaman kasir ya</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Tambahmenu">Tambah Menu</button>

    <!-- Modal Tambah menu -->
    <div class="modal fade" id="Tambahmenu" tabindex="-1" aria-labelledby="tambahmenumodal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahmenumodal">Tambahkan Data Menu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="Nama Menu" class="form-label">Nama Menu</label>
                        <input type="text" class="form-control" id="namamenu" placeholder="Masukkan nama menu">
                    </div>
                    <div class="mb-3">
                        <label for="Harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" placeholder="Masukkan harga">
                    </div>
                    <div class="mb-3">
                        <label for="Deskripsi" class="form-label">Deskripsi Menu</label>
                        <textarea class="form-control" id="deskripsimenu" rows="3" placeholder="Masukkan deskripsi menu"></textarea>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="pilih jenis menu">
                            <option value="1">Unca'an Mansure</option>
                            <option value="2">Pasta</option>
                            <option value="3">Snacks</option>
                            <option value="4">Sweet Tooth</option>
                            <option value="5">Beverages</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="gambarmenu" class="form-label">Upload Gambar Menu</label>
                        <input type="file" class="form-control" id="gambarmenu" name="Upload">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>