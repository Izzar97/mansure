<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah user kasir</title>
</head>
<body>
    <div class="card-header">
        <h3 class="card-title">
            <!-- <i class="fas fa-plus mr-1"></i> -->
            <b>kasir coi</b>
        </h3>
        <div class="card">
            <form action="<?= base_url('daftaruser') ?>" method="post" enctype="multipart/form-data">
                <div class="mb-1 row">
                    <label for="exampleFormControlInput1" class="col-sm-2">nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_user" name="nama_user"
                            placeholder="Silahkan Masukkan nama">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="exampleFormControlInput1" class="col-sm-2">username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Silahkan Masukkan username">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="exampleFormControlInput1" class="col-sm-2">pw</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Silahkan Masukkan pw">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="exampleFormControlInput1" class="col-sm-2">jabatan</label>
                    <div class="col-sm-10">
                        <select class="form-control" aria-label="Default select example"
                            id="jabatan" name="jabatan">
                            <option selected>Pilih</option>
                            <option value="kasir">kasir</option>
                            <option value="chef">chef</option>
                        </select>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
        <div class="tab-content p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">nama</th>
                        <th scope="col">username</th>
                        <th scope="col">jabatan</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $item) : ?>
                        <?php if($item['jabatan']): ?>
                            <tr>
                                <td><?= $item['nama_user'] ?></td>
                                <td><?= $item['username'] ?></td>
                                <td><?= $item['jabatan'] ?></td>
                                <td>
                                    <a href="<?= base_url('hapus_user')  . '/' . $item['id'] ?>" class="btn btn-danger">hapus</a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>