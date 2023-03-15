<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/stylee.css">

</head>
  
<body>  
    <!-- Navbar -->
    <?php
    include "navbar.php";
    ?>
    <!-- End Navbar -->
    <!-- Carousel -->
    <section>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/img/man.jpeg" class="d-block w-100"width="100%" height="450px"  alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/plane.jpg" class="d-block w-100" width="100%" height="450px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/sakra.jpg" class="d-block w-100" width="100%" height="450px" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </section>
    <!-- End Carousel -->

    <!-- Paket -->
    <section id="paket" class="mb-3 py-3 container-fluid bg-light">
    <div class="container mb-4">
      <h3 class="mb-4 mt-2 text-center">Daftar Film Hari Ini</h3>

      <div class="row">
        <?php
        require "../data/rs.php";
        foreach ($rs as $index => $value){
          // var_dump($index);
          // var_dump($value);
          
        ?>

        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2 h-100">
            <img src="../assets/img/<?= $value[3]?>" name="gambar" class="card-img-top"  alt="">
            <div class="card-body">
              <h5><?= $value[0]?></h5>
              <p><?= $value[1]?></p>
            </div>
            <div class="card-footer">
              <h5>Rp. <?= number_format($value[2], '0') ?></h5>
              <div class="card-footer">
                <!-- id menggunakan index dari array dataproduk -->
                <a href="transaksi.php?id=<?= $index ?>" class="btn btn-primary w-100">Pilih</a>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
    <!-- End Paket -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>