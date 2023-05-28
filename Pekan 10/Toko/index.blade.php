<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DITs_TROO</title>
</head>
<body>
    @extends('Pekan 10/template/main')

    @section('content1')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://i.pinimg.com/originals/33/8e/de/338ede5f9f949b9c4cc6c1c0c15c6a00.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://uproxx.com/wp-content/uploads/2022/10/FastFoodMistakes-1600-x-500-1.jpg?w=1600&h=500&crop=1" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    @endsection

    @section('content2')

    <div class="row row-cols-2 row-cols-md-4 g-4 mb-5">
        <div class="col">
          <div class="card h-100">
          <a href="Pekan 10/toko/detail" class="btn">
            <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">PRODUK</h5>
              <p class="card-text">This is a short card.</p>
            </div>
          </a>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
          <a href="Pekan 10/toko/detail" class="btn">
            <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">PRODUK</h5>
              <p class="card-text">This is a short card.</p>
            </div>
          </a>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
          <a href="Pekan 10/toko/detail" class="btn">
            <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">PRODUK</h5>
              <p class="card-text">This is a short card.</p>
            </div>
          </a>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
          <a href="Pekan 10/toko/detail" class="btn">
            <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">PRODUK</h5>
              <p class="card-text">This is a short card.</p>
            </div>
          </a>
          </div>
        </div>
      </div>
        
    @endsection
</body>
</html>