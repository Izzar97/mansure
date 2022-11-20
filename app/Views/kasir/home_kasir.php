<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>Ini home kasir</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <?php 
    if(session()->getFlashdata('status')){
        echo"<h5>".session()->getFlashdata('status')."<h5/>";
    }
    ?>
    <a href="<?= base_url('tambah-menu') ?>" class="btn btn-primary">Tambah</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Menu</th>
                <th scope="col">Harga</th>
                <th scope="col">Gambar</th>
                <th scope="col">Status Menu</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach($products as $item) : ?>
              <tr>
                <td><?= $i?></td>
                <td><?= $item['nama_menu'] ?></td>
                <td><?= $item['jenis_menu'] ?></td>
                <td>Rp. <?= $item['harga'] ?></td>
                <td>
                    <img src="<?= "/uploads/".$item['gambar']; ?>" height="50px" width="50px" alt="Image">
                </td>
                <td><?= $item['status_stok_menu'] ?></td>
                <td><?= $item['deskripsi'] ?></td>
                <td>
                  <a href="<?= base_url('edit-menu/'.$item['id_menu']) ?>" class="btn btn-warning">Edit</a>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus">
                    Hapus
                  </button>
                  <!-- modal hapus -->
                  <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="hapusmodal" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-body">
                          <p>Apakah anda inginhapus ? </p>
                        </div>
                        <div class="modal-footer">
                          <a href="<?= base_url('home-kasir');?> " class="btn btn-secondary">kembali</a>
                          <a href="<?= base_url('delete').'/'.$item['id_menu']?> " class="btn btn-danger">Hapus</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <?php $i++; endforeach ?>
        </tbody>
      </table>

  </body>
</html>