<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
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
                <form action="<?php echo base_url('kasir/User_kasir/simpan'); ?> method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="Nama Menu" class="form-label">Nama Menu</label>
                            <input type="text" class="form-control" id="namamenu" name="namamemu" placeholder="Masukkan nama menu">
                        </div>
                        <div class="mb-3">
                            <label for="Harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="hargamenu" placeholder="Masukkan harga">
                        </div>
                        <div class="mb-3">
                            <label for="Deskripsi" class="form-label">Deskripsi Menu</label>
                            <textarea class="form-control" id="deskripsimenu" name="deskripsi" rows="3" placeholder="Masukkan deskripsi menu"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="jenis menu" class="form-label">Jenis Menu</label>
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
                            <input type="file" class="form-control" id="gambarmenu" name="gambar">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Menu</th>
                <th scope="col">Harga Menu</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Jenis Menu</th>
                <th scope="col">Status Stok</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($datamenu as $row): ?>
            <tr>
                <td scope="row"><?= $i++; ?></td>            
                <td><?= $row->nama_menu;?></td>            
                <td>Rp. <?= $row->harga;?></td>            
                <td><?= $row->deskripsi;?></td>                       
                <td><?= $row->jenis_menu; ?></td>            
                <td><?= $row->status_stok_menu; ?></td>            
                <td><?= $row->gambar; ?></td>            
            </tr>
            <?php 
            endforeach;
            ?>
        </tbody>
    </table>

</body>
</html>