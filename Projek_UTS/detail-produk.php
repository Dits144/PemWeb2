<?php 
      require_once 'koneksi.php';

      $nama = htmlspecialchars($_GET['nama']);

      $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama = '$nama'");
      $produk = mysqli_fetch_array($queryProduk);

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="img/logo1.jpeg" type="">
   <title>Dits_TROO | Produk</title>
</head>
<style>
   .box-foto{
      background-size: cover;
      transition: all 1.1s;
   }

   .box-foto:hover{
      transform: scale(1.2);
   }

   .btn-box a {
  display: inline-block;
  padding: 10px 40px;
  background-color: #007bff;
  border: 1px solid #007bff;
  color: #ffffff;
  border-radius: 0;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.btn-box a:hover {
  background-color: transparent;
  color: #007bff;
}
</style>
<style>
   section b h1{
      font-weight:bold;
      font-size:100px;
      line-height:48px;
      color:white;
      text-align:center;
      font-family: monospace;
      font-style: oblique;
      font-weight:bold;
   }

   legend {
      border: 3px solid white;
      background-color: white;
   }
</style>


<body class="bg-dark">
   <?php
   require_once 'navbar2.php';
   ?>
<section class="slider_section ">
         <b> <h1>Dits_TROO</h1></b>
         <div class="slider_bg_box">
            <img src="https://www.harmony.co.id/wp-content/uploads/2020/09/Image-21.jpg" alt="">
         </div>
         
         </div>
</section>


   <div class="container-fluid banner-produk d-flex align-items-center mt-5 bg-dark">
      <div class="container">

         <div class="row" style="border: 3px solid black; margin-bottom: 50px; background-color: white;">
            <div class="col-lg-5 box-foto">
               <img src="<?= $produk['foto'] ?>" class="w-100" alt="">
            </div>
            <div class="col-md-6">
               <h1><?= $produk['nama'] ?></h1>
               <p class="fs-5">
                  <?= $produk['deskripsi'] ?>
               </p>
               <h6 class="detail-box">
                  Rp. <?= $produk['harga_jual'] ?>
               </h6>
               <p> Stok saat ini :
                  <strong> <?= $produk['stok'] ?> </strong>
               </p>

               <div class="btn-box">
                                 <a href="#produk" class="btn1">
                                    Shop Now
                                 </a>
                              </div>
            </div>
         </div>

         </div>
      </div>



   <?php 
   require_once 'footer.php';
   ?>
   
</body>

</html>