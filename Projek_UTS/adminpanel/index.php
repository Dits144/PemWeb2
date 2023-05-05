<?php
require_once 'session.php';
require_once '../koneksi.php';

$queryKategori = mysqli_query($con, "SELECT * FROM kategori");
$jumlahKategori = mysqli_num_rows($queryKategori);

$queryProduk = mysqli_query($con, "SELECT * FROM produk");
$jumlahProduk = mysqli_num_rows($queryProduk);

$queryPesanan = mysqli_query($con, "SELECT * FROM pesanan");
$jumlahPesanan = mysqli_num_rows($queryPesanan);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../fontawesome/css/all.css">
</head>
<style>
    .kotak {
        border: solid;
    }

    .summary-kategori {
        background-color: #0a6b4a;
        border-radius: 10px;
    }

    .summary-produk {
        background-color: royalblue;
        border-radius: 10px;
    }

    .no-decoration {
        text-decoration: none;

    }
</style>

<body>
    <?php
    require_once 'navbar.php';
    ?>
    <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </nav>
        <h2>Halo
            <?= $_SESSION['username']; ?>
        </h2>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="kotak summary-kategori p-3">
                        <div class="row">
                            <div class="col-6">
                                <i class="fa-solid fa-shield fa-5x"></i>
                            </div>
                            <div class="col-6 text-white">
                                <h3 class="fs-2">Kategori</h3>
                                <p class="fs-4">
                                    <?= $jumlahKategori ?> Kategori
                                </p>
                                <p><a href="kategori.php" class="text-primary no-decoration">Lihat Detail>></a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="kotak summary-produk p-3">
                        <div class="row">
                            <div class="col-6">
                                <i class="fa-solid fa-cubes fa-5x"></i>
                            </div>
                            <div class="col-6 text-white">
                                <h3 class="fs-2">Produk</h3>
                                <p class="fs-4">
                                    <?= $jumlahProduk ?> Produk
                                </p>
                                <p><a href="produk.php" class="text-danger no-decoration">Lihat Detail>></a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="kotak summary-kategori p-3">
                        <div class="row">
                            <div class="col-6">
                            <i class="fa-solid fa-shop fa-5x"></i>
                            </div>
                            <div class="col-6 text-white">
                                <h3 class="fs-2">Pesanan</h3>
                                <p class="fs-4">
                                    <?= $jumlahPesanan ?> Pesanan
                                </p>
                                <p><a href="kategori.php" class="text-primary no-decoration">Lihat Detail>></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>