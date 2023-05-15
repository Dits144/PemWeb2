<?php
require_once 'session.php';
require_once '../koneksi.php';

$query = mysqli_query($con, "SELECT a.*, b.nama AS nama_kategori FROM produk a JOIN kategori b ON a.kategori_produk_id=b.id");
$jumlahKategori = mysqli_num_rows($query);

$queryKategori = mysqli_query($con, "SELECT * FROM kategori");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>
<style>
    form div {
        margin-bottom: 10px;
    }
</style>

<body>
    <?php
    require_once "navbar.php";
    ?>

    <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Produk</li>
            </ol>
        </nav>

        <div class="my-5 col-12 col-md-6">
            <h3>Tambah Produk</h3>

            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" autocomplete="off" required>
                </div>
                <div>
                    <label for="hargaJual">Harga Jual</label>
                    <input type="number" name="hargaJual" class="form-control" required>
                </div>
                <div>
                    <label for="hargaBeli">Harga Beli</label>
                    <input type="number" name="hargaBeli" class="form-control">
                </div>
                <div>
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" required>
                        <option value="">Pilih satu</option>
                        <?php
                        while ($data = mysqli_fetch_array($queryKategori)) {
                            ?>
                            <option value="<?php echo $data['id']; ?>"><?= $data['nama']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="foto">Foto</label>
                    <input type="url" id="foto" name="foto" class="form-control" placeholder="www.com">
                </div>
                <div>
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control">
                </div>
                <div>
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" class="form-control">
                </div>
                <div>
                    <label for="minstok">Min Stok</label>
                    <input type="number" name="minstok" class="form-control">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary" name="simpan">Tambah</button>
                </div>
            </form>
            <?php
    if (isset($_POST['simpan'])) {
        $nama = htmlspecialchars($_POST['nama']);
        $kategori = htmlspecialchars($_POST['kategori']);
        $hargajual = htmlspecialchars($_POST['hargaJual']);
        $hargabeli = htmlspecialchars($_POST['hargaBeli']);
        $foto = htmlspecialchars($_POST['foto']);
        $deskripsi = htmlspecialchars($_POST['deskripsi']);
        $stok = htmlspecialchars($_POST['stok']);
        $minstok = htmlspecialchars($_POST['minstok']);

        if ($nama == '' || $kategori == '' || $hargajual == '') {
            ?>
            <div class="alert alert-warning mt-3" role="alert">
                nama, kategori, dan harga wajib diisi
            </div>
            <?php
        } else {
            $queryTambah = mysqli_query($con, "INSERT INTO produk (kategori_produk_id, nama, harga_jual, harga_beli, 
                            foto, deskripsi, stok, min_stok) VALUES ('$kategori', '$nama', '$hargajual', '$hargabeli', 
                            '$foto', '$deskripsi', '$stok', '$minstok')");

            if ($queryTambah) {
                ?>
                <div class="alert alert-primary mt-3" role="alert">
                    Produk Berhasil di Tambahkan
                </div>

                <meta http-equiv="refresh" content="2; url=produk.php">
                <?php
            } else {
                echo mysqli_error($con);
            }
        }
    }
?>

        </div>

        <div class="mt-5 mb-5">
            <h2>List Produk</h2>

            <div class="table-responsive mt-5">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga Jual</th>
                            <th scope="col">Harga Beli</th>
                            <th scope="col">Kategori Produk</th>
                            <th scope="col">foto</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Min Stok</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if ($jumlahKategori == 0) {

                            ?>
                            <tr>
                                <td colspan="10" class="text-center">Tidak ada data Produk</td>
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
                                        <?= $data['nama']; ?>
                                    </td>
                                    <td>
                                        <?= $data['harga_jual']; ?>
                                    </td>
                                    <td>
                                        <?= $data['harga_beli']; ?>
                                    </td>
                                    <td>
                                        <?= $data['nama_kategori']; ?>
                                    </td>
                                    <td>
                                        <?= $data['foto']; ?>
                                    </td>
                                    <td>
                                        <?= $data['deskripsi']; ?>
                                    </td>
                                    <td>
                                        <?= $data['stok']; ?>
                                    </td>
                                    <td>
                                        <?= $data['min_stok']; ?>
                                    </td>
                                    <td>
                                        <a href="produk-detail.php?id=<?php echo $data['id']; ?>" class="btn btn-info"><i
                                                class="fa-solid fa-magnifying-glass"></i></a>
                                    </td>
                                </tr>
                                
                                <?php
                                $jumlah++;
                            }
                        }
                        ?>
                    </tbody>

            </div>
        </div>
</body>

</html>