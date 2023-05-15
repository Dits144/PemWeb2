<?php
require_once 'session.php';
require_once '../koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($con, "SELECT * FROM pesanan WHERE id='$id'");
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
        <h3>Pesanan Pelanggan</h3>

        <form action="" method="post">
            <div>
                <label for="pesanan">Nama Pesanan</label>
                <input type="text" id="nama_pemesan" name="nama_pemesan" class="form-control"
                    value="<?php echo $data['nama_pemesan']; ?>">
            </div>

            <div class="mt-3">
                <button class="btn btn-primary" type="submit" name="editbtn">Edit</button>
                <button class="btn btn-danger" type="submit" name="deletebtn">Delete</button>
            </div>
        </form>

        <?php
        if (isset($_POST['editbtn'])) {
            $pesanan = htmlspecialchars($_POST['pesanan']);

            if ($data['nama_pemesan'] == $pesanan) {
                ?>
                <meta http-equiv="refresh" content="2" url="kategori.php">
                <?php
            }
        }
        ?>

        <?php
        if (isset($_POST['deletebtn'])) {
            $queryDelete = mysqli_query($con, "DELETE FROM pesanan WHERE id='$id'");

            if ($queryDelete) {
                ?>
                <div class="alert alert-primary mt-3" role="alert">
                    Kategori Berhasil di hapus
                </div>
                <meta http-equiv="refresh" content="2" url="pesanan.php">
                <?php
            }
        }
        ?>
    </div>
</body>

</html>