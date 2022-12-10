<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

</head>

</html>
<style>
.navnav {
    background-color: white;
}

.navbar {
    padding-top: 20px;
    padding-left: 40px;
}

.navbar-brand {
    padding: 0px;
}

.navbar-text {
    font-weight: 500;
    float: right;
    margin-right: 20px;
}

hr {
    margin-left: 40px;
    margin-top: 10px;
    margin-right: 40px;
}
</style>

<body>
    <div class="navnav">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="text-align:justify;">
                    <img src="https://d1fdloi71mui9q.cloudfront.net/CkC5B6RQdO4LhYtECNCw_iPJoJ2krt3AvQh2v"
                        alt="Logo Toko Mansure" width="100" height="100" class="d-inline-block align-text-top">
                    <!-- TOKO MANSURE -->
                </a>
                <div class="navbar-text" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/menu') ?>">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/aboutus') ?>">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/logout') ?>">Logout</a>
                        </li>
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <br>

        <button type="button" style="float: right;" class="btn fas fa-shopping-cart" data-bs-toggle="modal"
            data-bs-target="#modalKeranjang">
        </button>

        <!-- modal keranjang -->
        <div class="modal fade" id="modalKeranjang" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <label class="col-sm-1.5">Nama</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama_Pemesan" name="nama_Pemesan"
                                placeholder="Masukkan Nama Anda">
                        </div>

                        <label class="col-sm-1.5">No. Meja</label>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" id="no_meja" name="no_meja" required>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Menu</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                            </table>

                            <div class="modal-footer">
                                <a href="<?= base_url('/menu'); ?>" class="btn btn-secondary">Kembali</a>
                                <a href="#" class="btn btn-success">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="garis" />
    </div>
</body>