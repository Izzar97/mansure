<?php
include 'navbar.php';
?>
<style>
body {
    background-image: url(img/bg3.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-position-y: 100pt;
    background-size: 100%;
    /* background-position-x: 40px; */
    background-attachment: fixed;
}

.container {
    padding-left: 50px;
    padding-top: 100px;
    color: white;
}

h1 {

    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif
}
</style>

<head>
    <title>Toko Mansure | Home</title>
</head>

<body>
    <div class="container">
        <h1 style="margin-bottom: 0px;">Toko Mansure</h1>
        <h6>Bukan Toko Bangunan </h6>
        <a class="btn btn-dark" href="<?= base_url('/menu') ?>">Order Now</a>
        <!-- <h6>Open 09.00 - 22.00</h6> -->

    </div>
</body>