<?php
require_once 'session.php';
require_once '../koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($con, "SELECT a.*, b.nama AS nama_kategori FROM produk a JOIN kategori b ON a.kategori_produk_id=b.id WHERE a.id='$id'");
$data = mysqli_fetch_array($query);

$queryKategori = mysqli_query($con, "SELECT * FROM kategori WHERE id!='$data[kategori_produk_id]'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Detail</title>
</head>
<style>
    form div {
        margin-bottom: 10px;
    }
</style>

<body>
    <?php
    require_once 'navbar.php'
        ?>
    <div class="container mt-5">
        <h2>Tambah Kategori</h2>

        <div class="col-12 col-md-6">
            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" autocomplete="off"
                        value="<?= $data['nama']; ?>" required>
                </div>
                <div>
                    <label for="hargaJual">Harga Jual</label>
                    <input type="number" name="hargaJual" id="hargaJual" class="form-control"
                        value="<?= $data['harga_jual']; ?>" required>
                </div>
                <div>
                    <label for="hargaBeli">Harga Beli</label>
                    <input type="number" name="hargaBeli" class="form-control">
                </div>
                <div>
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" required>
                        <option value="<?= $data['kategori_produk_id']; ?>"><?= $data['nama_kategori']; ?></option>
                        <?php
                        while ($dataKategori = mysqli_fetch_array($queryKategori)) {
                            ?>
                            <option value="<?php echo $data['id']; ?>"><?= $data['nama']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div>
                <label for="foto">Foto</label>
                <input type="url" id="foto" name="foto" class="form-control" value="<?= $data['foto']; ?>" placeholder="www.com">
                </div>
                <div>
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" value="<?= $data['deskripsi']; ?>">
                </div>
                <div>
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" class="form-control" value="<?= $data['stok']; ?>">
                </div>
                <div>
                    <label for="minstok">Min Stok</label>
                    <input type="number" name="minstok" class="form-control" value="<?= $data['min_stok']; ?>">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    <button class="btn btn-danger" type="submit" name="hapus">Hapus</button>
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

                if ($nama=='' || $kategori=='' || $hargajual==''){
                    ?>
                    <div class="alert alert-warning mt-3" role="alert">
                        nama, kategori dan harga wajib
                    </div>
                    <?php 
                }
                else {
                    $queryUpdate = mysqli_query($con, "UPDATE produk SET kategori_produk_id='$kategori', nama='$nama', 
                    harga_jual='$hargajual', harga_beli='$hargabeli', foto='$foto', deskripsi='$deskripsi', stok='$stok', 
                    min_stok='$minstok' WHERE id=$id");
                }
            }
            

            if (isset($_POST['hapus'])) {
                $queryHapus = mysqli_query($con, "DELETE FROM produk WHERE id='$id'");
                if ($queryHapus) {
                    ?>
                    <div class="alert alert-primary mt-3" role="alert">
                        Produk Berhasil di hapus
                    </div>
                    <meta http-equiv="refresh" content="2" url="produk.php">
                    <?php
                }
            }
            ?>
        </div>
    </div>
</body>

</html>