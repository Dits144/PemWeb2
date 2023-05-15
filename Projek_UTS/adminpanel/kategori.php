<?php
require_once 'session.php';
require_once '../koneksi.php';

$queryKategori = mysqli_query($con, "SELECT * FROM kategori");
$jumlahKategori = mysqli_num_rows($queryKategori);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo1.jpeg" type="">
    <title>List Kategori</title>
</head>

<body>
    <?php require_once 'navbar.php'; ?>
    <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>

        <div class="my-5 col-12 col-md-6">
            <h3>Tambah Kategori</h3>

            <form action="" method="post">
                <div>
                    <label for="kategori">Kategori</label>
                    <input type="text" id="kategori" name="kategori" placeholder="input nama kategori"
                        class="form-control">
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit" name="simpan_kategori">Simpan</button>
                </div>
            </form>

        </div>

        <?php
        if (isset($_POST['simpan_kategori'])) {
            $kategori = htmlspecialchars($_POST['kategori']);

            $queryExist = mysqli_query($con, "SELECT nama FROM kategori WHERE nama='$kategori'");
            $jumlahDataKategoriBaru = mysqli_num_rows($queryExist);

            if ($jumlahDataKategoriBaru > 0) {
                ?>
                <div class="alert alert-warning mt-3" role="alert">
                    Kategori Sudah Ada
                </div>
                <?php
            } else {
                $querySimpan = mysqli_query($con, "INSERT INTO kategori (nama) VALUES('$kategori')");

                if ($querySimpan) {
                    ?>
                    <div class="alert alert-primary mt-3" role="alert">
                        Kategori Berhasil Disimpan
                    </div>

                    <meta http-equiv="refresh" content="2" url="kategori.php">
                    <?php
                } else {
                    echo mysqli_error($con);
                }

            }
        }
        ?>


    <h3>List kategori</h3>
    <div class="table-responsive mt-5">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                if ($jumlahKategori == 0) {

                    ?>
                    <tr>
                        <td colspan="10" class="text-center">Tidak ada data kategori</td>
                    </tr>
                    <?php
                } else {
                    $jumlah = 1;
                    while ($data = mysqli_fetch_array($queryKategori)) {
                        ?>
                        <tr>
                            <td>
                                <?= $jumlah; ?>
                            </td>
                            <td>
                                <?= $data['nama']; ?>
                            </td>
                            <td>
                                <a href="kategori-detail.php?id=<?php echo $data['id']; ?>" class="btn btn-info"><i
                                        class="fa-solid fa-magnifying-glass"></i></a>
                            </td>
                        </tr>
                        <?php
                        $jumlah++;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>

</html>