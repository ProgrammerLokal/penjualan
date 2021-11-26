  <!-- halaman content -->
  <div class="container mt-5 mb-5">
      <h1 class="text-center text-secondary mb-5 mt-5">Add Product</h1>
      <div class="card">
          <div class="card-body">
              <div class="row justify-content-center">
                  <div class="col-md-6">
                      <form action="action/actionaddproduct.php" method="post">
                          <div class="form-group">
                              <label for="">Name</label>
                              <input type="text" name="name" class="form-control" placeholder="Masukan Name">
                          </div>
                          <div class="form-group">
                              <label for="">Price</label>
                              <input type="text" name="price" class="form-control" placeholder="Masukan Price">
                          </div>
                          <div class="form-group">
                              <label for="">Description</label>
                              <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
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