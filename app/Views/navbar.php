<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

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
        <hr class="garis" />
    </div>
</body>