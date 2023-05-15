<?php
require_once 'session.php';
require_once '../koneksi.php';

$query = mysqli_query($con, "SELECT a.*, b.nama AS nama_produk FROM pesanan a JOIN produk b ON a.produk_id=b.id");
$jumlahPesanan = mysqli_num_rows($query);

$queryPesanan = mysqli_query($con, "SELECT * FROM pesanan");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo1.jpeg" type="">
    <title>List Pesanan</title>
</head>

<body>
    <?php require_once 'navbar.php'; ?>
    <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pesanan</li>
            </ol>
        </nav>

        <h3>List Pesanan</h3>
        <div class="table-responsive mt-5">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Jenis Produk</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    if ($jumlahPesanan == 0) {

                        ?>
                        <tr>
                            <td colspan="10" class="text-center">Tidak ada data kategori</td>
                        </tr>
                        <?php
                    } else {
                        $jumlah = 1;
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td>
                                    <?= $jumlah; ?>
                                </td>
                                <td>
                                    <?= $data['tanggal']; ?>
                                </td>
                                <td>
                                    <?= $data['nama_pemesan']; ?>
                                </td>
                                <td>
                                    <?= $data['alamat_pemesan']; ?>
                                </td>
                                <td>
                                    <?= $data['no_hp']; ?>
                                </td>
                                <td>
                                    <?= $data['email']; ?>
                                </td>
                                <td>
                                    <?= $data['jumlah_pesanan']; ?>
                                </td>
                                <td>
                                    <?= $data['deskripsi']; ?>
                                </td>
                                <td>
                                    <?= $data['nama_produk']; ?>
                                </td>
                                <td>
                            
                                        <a href="pesanan-detail.php?id=<?php echo $data['id']; ?>" class="btn btn-info"><i
                                                class="fa-solid fa-magnifying-glass"></i></a>
                                    
                                </td>
                            </tr>
                            <?php
                            $jumlah++;
                        }
                    }
                    if (isset($_POST['hapus'])) {
                        $queryHapus = mysqli_query($con, "DELETE FROM pesanan WHERE id='$id'");
                        if ($queryHapus) {
                            ?>
                            <div class="alert alert-primary mt-3" role="alert">
                                Produk Berhasil di hapus
                            </div>
                            <meta http-equiv="refresh" content="2" url="./pesanan.php">
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>