<?php
// menangkap kode_product yang dikirimkan lewat url
$kode_product = $_GET['kode_product'];
// lakukan query kedalam tabel product berdasarkan id
$query = mysqli_query($con,"select * from tb_product where id=".$kode_product);
$data = (object) mysqli_fetch_assoc($query);
?>
<!-- halaman content -->
  <div class="container mt-5 mb-5">
      <h1 class="text-center text-secondary mb-5 mt-5">Edit Product</h1>
      <div class="card">
          <div class="card-body">
              <div class="row justify-content-center">
                  <div class="col-md-6">
                      <?php if(isset($_SESSION['validation'])) {?>
                        <small style="color:red;"><?= $_SESSION['validation'] ?></small>
                        <?php unset($_SESSION['validation']); ?>
                    <?php } ?>
                      <form action="action/actioneditproduct.php" method="post">
                      <input type="hidden" name="id" value="<?=$data->id?>" class="form-control" placeholder="Masukan Name">
                          <div class="form-group">
                              <label for="">Name</label>
                              <input type="text" name="name" value="<?=$data->name?>" class="form-control" placeholder="Masukan Name">
                          </div>
                          <div class="form-group">
                              <label for="">Price</label>
                              <input type="text" name="price" value="<?=$data->price?>" class="form-control" placeholder="Masukan Price">
                          </div>
                          <div class="form-group">
                              <label for="">Description</label>
                              <textarea name="description" cols="30" rows="10" class="form-control"><?=$data->description?></textarea>
                          </div>
                          <div class="form-group mt-5">
                              <button type="submit" class="btn btn-primary btn-sm">Save</button>
                              <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- halaman end content -->