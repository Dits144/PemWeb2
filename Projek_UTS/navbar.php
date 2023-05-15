<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  nav {
  display: flex;
  align-items: center;
  background-color: #333;
  padding: 10px;
}

nav img {
  height: 50px;
  margin-right: 10px;
}

  nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav li {
  float: left;
}

nav li a {
  display: block;
  color: #fff;
  padding: 10px 20px;
  text-decoration: none;
}

nav li a:hover {
  background-color: #0d6efd;
}

body,
    p,
    h1,
    h2,
    a,
    h3 {
        font-family: 'Lobster', cursive;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item me-1">
        <img src="img/logo.png" alt="Logo">
        </li>
        <li class="nav-item">
          <a class="nav-link active me-4" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active me-4" aria-current="page" href="#kategori">Kategori</a>
        </li><li class="nav-item">
          <a class="nav-link active me-4" aria-current="page" href="#produk">Produk</a>
        </li><li class="nav-item">
        <li class="nav-item">
          <a class="nav-link active me-4" aria-current="page" href="pesanan.php">Pesanan</a>
        </li>
          <a class="nav-link active me-4" aria-current="page" href="../Projek_UTS/adminpanel/index.php">Login admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>