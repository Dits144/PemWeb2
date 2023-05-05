<?php
    require_once "koneksi.php";
    $queryProduk = mysqli_query($con, "SELECT id, kategori_produk_id, nama, harga_jual, harga_beli, foto, deskripsi, stok, min_stok FROM produk LIMIT 6");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DITs_TROO | Home</title>
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<style>
    .banner {
        height: 80vh;
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://www.harmony.co.id/wp-content/uploads/2020/09/Image-21.jpg');
        background-size: cover;
        background-position: center;
    }

    .banner h1 {
        font-weight: bold;
    }

    .highlighted-kategori {
        height: 250px;
    }

    .kategori-baju-pria {
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://1.bp.blogspot.com/-maXqvzyhC-8/W412iqllMTI/AAAAAAAAAEM/oxLE3DW4--coAVxsQKgu5TTJXqdkPOeJQCLcBGAs/s640/kaos-distro-angops.com.jpg');
        background-size: cover;
        background-position: center;
    }

    .kategori-baju-wanita {
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://cf.shopee.co.id/file/605480453e7cd0797b0a7cec3455b0b2');
        background-size: cover;
        background-position: center;
    }

    .kategori-hoodie {
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//97/MTA-36758113/no_brand_pakaian_pria_sweater_hoodie_distro_pria_-_jaket_pria_-_sweater_lengan_panjang_pria__tusty_full03_j6sl0wnq.jpg');
        background-size: cover;
        background-position: center;
    }

    .no-decoration {
        text-decoration: none;
        color: white;
    }

    .no-decoration:hover {
        color: #004e92;
    }

    .text{
        color: white;
    }

    .text-harga{
        font-size: 20px;
        color: #004e92;
    }

    .image-box  img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: top;
    }

    .footer{
        color: white;
    }
</style>

<body>
    <?php
    require_once 'navbar.php';
    ?>

    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center text-white">
            <h1>DITs_TROO</h1>
            <h3>Mau Cari apa</h3>
            <div class="col-md-8 offset-md-2">
                <form action="produk.php" method="get">
                    <div class="input-group input-group-lg my-3">
                        <input type="text" class="form-control" placeholder="Tshirt Hoodie Jaket"
                            aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                        <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="container text-center">
            <h3>Kategori Terlaris</h3>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div
                        class="highlighted-kategori kategori-baju-pria d-flex justify-content-center align-items-center">
                        <div class="text-white">
                            <h4><a class="no-decoration" href="produk.php?kategori=baju pria">Baju Pria</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div
                        class="highlighted-kategori kategori-baju-wanita d-flex justify-content-center align-items-center">
                        <div class="text-white">
                            <h4><a class="no-decoration" href="produk.php?kategori=baju wanita">Baju Wanita</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="highlighted-kategori kategori-hoodie d-flex justify-content-center align-items-center">
                        <div class="text-white">
                            <h4><a class="no-decoration" href="produk.php?kategori=hoodie">Hoodie</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid bg-dark py-5">
        <div class="container text-center text">
            <h3>Tentang Kami</h3>
            <p class="fs-5 mt-3"></p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad asperiores aspernatur hic beatae ab molestias similique aut inventore repellendus vitae. Est inventore voluptatibus officiis, aliquam ut et molestias sit excepturi ab consequuntur aperiam beatae vitae enim nulla iure tenetur fuga nisi facilis? Rem magnam incidunt temporibus vero, sed illum iste.
        </div>
    </div>
</body>

<div class="container-fluid py-5">
    <div class="container text-center">
        <h3>Produk</h3>
        
        <div class="row mt-5">
            <?php
            while($data = mysqli_fetch_array($queryProduk)){
                
            ?>
            <div class="col-sm-6 col-md-4 mb-3">
            <div class="card h-100">
                <div class="image-box">
                <img src="<?php echo $data['foto']; ?>" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $data['nama'] ?></h5>
                    <p class="card-text text-truncate"><?= $data['detail'] ?></p>
                    <p class="card-text text-harga">Rp. <?= $data['harga'] ?></p>
                    <a href="produk-detail.php?nama=php?nama=<?php echo $data['id'];?>" class="btn btn-primary">Beli Sekarang</a>
                </div>
            </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

  <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">Raditya</a>
  </div>
  <!-- Copyright -->
</footer>
  
</div>
<!-- End of .container -->


</html>