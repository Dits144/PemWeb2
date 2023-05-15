<?php
require_once "koneksi.php";

$queryProduk = mysqli_query($con, "SELECT id, kategori_produk_id, nama, harga_jual, harga_beli, foto, deskripsi, stok, min_stok FROM produk LIMIT 6");

$query = mysqli_query($con, "SELECT a.*, b.nama AS nama_kategori FROM produk a JOIN kategori b ON a.kategori_produk_id=b.id");
$queryKategori = mysqli_query($con, "SELECT * FROM kategori");
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
   <title>DITs_TROO | Home</title>
   <!-- bootstrap core css -->
   <link rel="stylesheet" type="text/css" href="./dits_troo_css/bootstrap.css">
   <!-- font awesome style -->
   <link href="./dits_troo_css/font-awesome.min.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="./dits_troo_css/style.css" rel="stylesheet">
   <!-- responsive style -->
   <link href="./dits_troo_css/responsive.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>
   */
</style>
<script>window.addEventListener("scroll", function () {
      var header = document.querySelector(".header_section");
      header.classList.toggle("sticky", window.scrollY > 0);
   });
</script>

<body>
   <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section bg-dark">
         <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container">
               <a class="navbar-brand" href="index.php"><img width="150" src="img/logo.png" alt="#"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="./index.php"
                           data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span
                              class="nav-label">Pages <span class="caret"></span></span></a>
                        <ul class="dropdown-menu">
                           <li><a href="#about">About</a></li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#kategori">Kategori</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#produk">Produk</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="formpesanan.php">Pesanan</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="../Projek_UTS/adminpanel/index.php">Login Admin</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="./index.php">
                           <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029"
                              style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                              <g>
                                 <g>
                                    <path
                                       d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                          c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z">
                                    </path>
                                 </g>
                              </g>
                              <g>
                                 <g>
                                    <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                          C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                          c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                          C457.728,97.71,450.56,86.958,439.296,84.91z"></path>
                                 </g>
                              </g>
                              <g>
                                 <g>
                                    <path
                                       d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                          c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z">
                                    </path>
                                 </g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                           </svg>
                        </a>
                     </li>
                     <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                     </form>
                  </ul>
               </div>
            </nav>
         </div>
      </header>
      <!-- end header section -->
      <!-- slider section -->
      <section class="slider_section ">
         <div class="slider_bg_box">
            <img src="https://store.sirclo.com/blog/wp-content/uploads/2022/03/3.-kaos-distro.jpg" alt="">
         </div>
         <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item">
                  <div class="container ">
                     <div class="row">
                        <div class="col-md-7 col-lg-6 ">
                           <div class="detail-box">
                              <h1>
                                 <span>
                                    Diskon 50%
                                 </span>
                                 <br>
                                 Cuma di DITs_TROO
                              </h1>
                              <p>
                                 Baju aman nyaman kuat dan bertenaga bisa di pakai di luar ruangan auto ganteng Baju
                                 aman nyaman kuat dan bertenaga bisa di pakai di luar ruangan auto ganteng Baju aman
                                 nyaman kuat dan bertenaga bisa di pakai di luar ruangan auto ganteng
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
               </div>
               <div class="carousel-item active">
                  <div class="container ">
                     <div class="row">
                        <div class="col-md-7 col-lg-6 ">
                           <div class="detail-box">
                              <h1>
                                 <span>
                                    Diskon 75%
                                 </span>
                                 <br>
                                 BURUAN!
                              </h1>
                              <p>
                                 Baju aman nyaman kuat dan bertenaga bisa di pakai di luar ruangan auto ganteng Baju
                                 aman nyaman kuat dan bertenaga bisa di pakai di luar ruangan auto ganteng Baju aman
                                 nyaman kuat dan bertenaga bisa di pakai di luar ruangan auto ganteng
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
               </div>
               <div class="carousel-item">
                  <div class="container ">
                     <div class="row">
                        <div class="col-md-7 col-lg-6 ">
                           <div class="detail-box">
                              <h1>
                                 <span>
                                    Diskon 100%
                                 </span>
                                 <br>
                                 BURUAN KEABISAN!!
                              </h1>
                              <p>
                                 Baju aman nyaman kuat dan bertenaga bisa di pakai di luar ruangan auto ganteng Baju
                                 aman nyaman kuat dan bertenaga bisa di pakai di luar ruangan auto ganteng Baju aman
                                 nyaman kuat dan bertenaga bisa di pakai di luar ruangan auto ganteng
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
               </div>
            </div>
            <div class="container">
               <ol class="carousel-indicators">
                  <li data-target="#customCarousel1" data-slide-to="0" class=""></li>
                  <li data-target="#customCarousel1" data-slide-to="1" class="active"></li>
                  <li data-target="#customCarousel1" data-slide-to="2"></li>
               </ol>
            </div>
         </div>
      </section>
      <!-- end slider section -->
   </div>
   <!-- why section -->
   <section class="why_section layout_padding bg-dark" id="kategori">
      <div class="container">
         <div class="heading_container heading_center">
            <h2>
               Kategori
            </h2>
         </div>
         <div class="row">
            <div class="col-md-4">
               <div class="box ">
                  <div class="img-box">
                     <i class="fa-solid fa-shirt fa-2xl"></i>
                  </div>
                  <div class="detail-box">
                     <h5>
                        Baju Pria
                     </h5>
                     <p>
                        "Pakaian Pria Berkualitas dengan Desain yang Tren dan Harga Terjangkau!"
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box ">
                  <div class="img-box">
                     <i class="fa-solid fa-person-dress fa-2xl"></i>
                  </div>
                  <div class="detail-box">
                     <h5>
                        Baju Wanita
                     </h5>
                     <p>
                        "Tingkatkan Gaya Fashion Anda dengan Pilihan Terbaik dari Koleksi Pakaian Wanita Kami!"
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box ">
                  <div class="img-box">
                     <i class="fa-solid fa-bag-shopping fa-2xl"></i>
                  </div>
                  <div class="detail-box">
                     <h5>
                        Hoodie
                     </h5>
                     <p>
                        "Hoodie: Pilihan Terbaik untuk Tampilan Kasual yang Trendi dan Berkelas!"
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end why section -->

   <!-- arrival section -->
   <section class="arrival_section" id="about">
      <div class="container">
         <div class="box">
            <div class="arrival_bg_box">
               <img src="img/logo1.jpeg" alt="">
            </div>
            <div class="row">
               <div class="col-md-6 ml-auto">
                  <div class="heading_container remove_line_bt">
                     <h2 style="color: black;">
                        About
                     </h2>
                  </div>
                  <p>
                     Kami adalah toko baju yang mengutamakan kualitas dalam setiap aspek produk kami. Berkomitmen untuk
                     menyediakan baju berkualitas tinggi, kami dengan hati-hati memilih bahan terbaik dan desain yang
                     menarik
                  </p>
                  <div>
                     <a ef="formpemesanan.php">
                        Shop Now
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end arrival section -->
   <!-- product section -->
   <section class="product_section layout_padding bg-dark" id="produk">
      <div class="container">
         <div class="heading_container heading_center">
            <h2>
               Our <span>Produk</span>
            </h2>
         </div>


         <div class="row">
            <?php while ($data = mysqli_fetch_array($query)) { ?>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="detail-produk.php?nama=<?= $data['nama']; ?>" class="option1">
                              <?= $data['nama']; ?>
                           </a>
                           <a href="formpesanan.php?nama=php?nama=<?php echo $data['id']; ?>" class="option2">
                              Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="<?= $data['foto']; ?>" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           <?= $data['nama_kategori']; ?>
                        </h5>
                        <h6>Rp.
                           <?= $data['harga_jual']; ?>
                        </h6>
                     </div>
                  </div>
               </div>
            <?php } ?>
         </div>

         <div class="btn-box">
            <a href="#produk">
               View All products
            </a>
         </div>
      </div>
   </section>
   <script>
  AOS.init();
</script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


   <!-- end product section -->

   <!-- end client section -->
   <!-- footer start -->
   <?php
   require_once 'footer.php';
   ?>