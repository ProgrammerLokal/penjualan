<?php
$query = mysqli_query($con, "select * from tb_product");
?>
  <!-- halaman content -->
  <div class="container mt-5 mb-5">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="img/slider2.jpg" class="d-block w-100 h-100" alt="">
              </div>
              <div class="carousel-item">
                  <img src="img/slider2.jpg" class="d-block w-100 h-100" alt="">
              </div>
              <div class="carousel-item">
                  <img src="img/slider3.jpg" class="d-block w-100 h-100" alt="">
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      </div>
      <h1 class="text-center text-secondary mb-5 mt-5">Home</h1>
      <div class="row">
        <?php while ($data = mysqli_fetch_assoc($query)) { ?>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="img/product1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['name'] ?></h5>
                        <span class="badge bg-primary"><?= $data['price'] ?></span>
                        <p class="card-text"><?= $data['description'] ?></p>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-cart-plus"></i> Cart</a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-eye"></i> Detail</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
  </div>
  <!-- halaman end content -->