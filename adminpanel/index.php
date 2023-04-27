<?php
    require_once 'session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
</head>
<style>
    .kotak{
        border: solid;
    }

    .summary-kategori{
        background-color: #0a6b4a;
        border-radius: 10px;
    }
</style>
<body>
    <?php
    require_once 'navbar.php';
    ?>
   <div class="container mt-5">
   <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>
<h2>Halo!</h2>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 kotak summary-kategori">
    <div class="row">
        <div class="col-6">
    
        </div>
    </div>
        </div>
    </div>
</div>
   </div>
</body>
</html>