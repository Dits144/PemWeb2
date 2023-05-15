<?php
require_once 'session.php';
require_once '../koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($con, "SELECT * FROM kategori WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/logo1.jpeg" type="">
    <title>Detail kategori</title>
</head>

<body>
    <?php
    require_once 'navbar.php'
        ?>
    <div class="container mt-5">
        <h3>Tambah Kategori</h3>

        <form action="" method="post">
            <div>
                <label for="kategori">Kategori</label>
                <input type="text" id="kategori" name="kategori" class="form-control"
                    value="<?php echo $data['nama']; ?>">
            </div>

            <div class="mt-3">
                <button class="btn btn-primary" type="submit" name="editbtn">Edit</button>
                <button class="btn btn-danger" type="submit" name="deletebtn">Delete</button>
            </div>
        </form>

        <?php
        if (isset($_POST['editbtn'])) {
            $kategori = htmlspecialchars($_POST['kategori']);

            if ($data['nama'] == $kategori) {
                ?>
                <meta http-equiv="refresh" content="2" url="kategori.php">
                <?php
            }
        }
        ?>

        <?php
        if (isset($_POST['deletebtn'])) {
            $queryCheck = mysqli_query($con, "SELECT * FROM produk WHERE kategori_produk_id='$id'");
            $dataCount = mysqli_num_rows($queryCheck);

            if ($dataCount > 0) {
                ?>
                <div class="alert alert-warning mt-3" role="alert">
                    Kategori sudah di gunakan di produk
                </div>
                <?php
                die();
            }

            $queryDelete = mysqli_query($con, "DELETE FROM kategori WHERE id='$id'");

            if ($queryDelete) {
                ?>
                <div class="alert alert-primary mt-3" role="alert">
                    Kategori Berhasil di hapus
                </div>
                <meta http-equiv="refresh" content="2" url="kategori.php">
                <?php
            }
        }
        ?>
    </div>
</body>

</html>