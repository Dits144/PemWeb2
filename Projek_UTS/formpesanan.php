<?php
require_once 'koneksi.php';


$queryPesanan = mysqli_query($con, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Basic -->

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Site Metas -->
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="img/logo1.jpeg" type="">
  <title>DITs_TROO | Form Pesanan</title>
</head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 20px;
  }

  .container1 {
    margin: 10% 25% 5% 25%;
    background-color: #007bff;
    border-radius: 10px;
    padding-bottom: 5%;
    padding-top: 3%;
  }

  .container1 h1 {
    text-align: center;
    margin-bottom: 30px;
    color: white;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: bold;
  }

  .container1 form {
    max-width: 500px;
    margin: 0 auto;
    background-color: #ffffff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

  }

  label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
  }

  input[type="text"],
  input[type="email"],
  input[type="tel"],
  input[type="number"],
  textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 20px;
  }

  textarea {
    height: 100px;
  }

  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    transition: background-color 0.3s ease;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }

  input:required,
  textarea:required {
    border-color: red;
  }

  input:valid,
  textarea:valid {
    border-color: #ccc;
  }

  .error-message {
    color: red;
    margin-top: -10px;
    margin-bottom: 10px;
    font-size: 12px;
  }

  .success-message {
    color: green;
    margin-top: -10px;
    margin-bottom: 10px;
    font-size: 14px;
  }

  input[type="date"] {
    /* Add your desired styles here */
    width: 200px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
  }
</style>

<body class="bg-dark">

  <?php
  require_once 'navbar2.php';
  ?>
  <div class="container1">
    <h1>Formulir Pemesanan Produk</h1>

    <form action="formpesanan.php" method="POST">
      <label for="tanggal">Tanggal Pemesanan:</label>
      <input type="date" id="tanggal" name="tanggal" required><br><br>

      <label for="nama">Nama Pemesan:</label>
      <input type="text" id="nama" name="nama" required><br><br>

      <label for="alamat">Alamat Pemesan:</label>
      <textarea id="alamat" name="alamat" required></textarea><br><br>

      <label for="telepon">Nomor Telepon:</label>
      <input type="tel" id="telepon" name="telepon" required><br><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>

      <label for="jumlah">Jumlah Pemesanan:</label>
      <input type="number" id="jumlah" name="jumlah" required><br><br>

      <label for="deskripsi">Deskripsi Pesanan:</label>
      <textarea id="deskripsi" name="deskripsi" required></textarea><br><br>

      <label for="produk_id">Nama Produk :</label>
      <select name="produk_id" id="produk_id" class="form-control" required>
        <option value="">Pilih satu</option>
        <?php
        while ($data = mysqli_fetch_array($queryPesanan)) {
          ?>
          <option value="<?php echo $data['id']; ?>"><?= $data['nama']; ?></option>
          <?php
        }
        ?>
      </select>
      <br>
      <br>

      <input type="submit" value="Check Out" name="simpan">
    </form>
  </div>
  <?php
  if (isset($_POST['simpan'])) {
    $tanggal = htmlspecialchars($_POST['tanggal']);
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $telepon = htmlspecialchars($_POST['telepon']);
    $email = htmlspecialchars($_POST['email']);
    $jumlah = htmlspecialchars($_POST['jumlah']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $produk_id = htmlspecialchars($_POST['produk_id']);

    if ($nama == '' || $alamat == '' || $produk_id == '') {
      ?>
      <div class="alert alert-warning mt-3" role="alert">
        nama, alamat, dan produk wajib diisi
      </div>
      <?php
    } else {
      $queryTambah = mysqli_query($con, "INSERT INTO pesanan (tanggal, nama_pemesan, alamat_pemesan, no_hp, 
                            email, jumlah_pesanan, deskripsi, produk_id) VALUES ('$tanggal', '$nama', '$alamat', '$telepon', 
                            '$email', '$jumlah', '$deskripsi', '$produk_id')");

      if ($queryTambah) {
        ?>
        <div class="alert alert-primary mt-3" role="alert">
          Produk Berhasil di Tambahkan
        </div>

        <meta http-equiv="refresh" content="2; url=index.php">
        <?php
      } else {
        echo mysqli_error($con);
      }
    }
  }
  ?>
  <?php
  require_once 'footer.php';
  ?>
</body>

</html>