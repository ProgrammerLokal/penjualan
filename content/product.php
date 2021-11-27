<!-- halaman content -->
<?php
$query = mysqli_query($con, "select * from tb_product");
?>
<div class="container mt-5 mb-5">
    <h1 class="text-center text-secondary mb-5">Product</h1>
    <a href="index.php?page=addproduct" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Add Product</a>
    <div class="row justify-content-center mb-5">
        <div class="col-md-6">
            <?php if (isset($_SESSION['pesan'])) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?= $_SESSION['pesan']; ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['pesan']) ?>
            <?php } ?>
        </div>
    </div>
    <div class="row">

        <?php while ($data = mysqli_fetch_assoc($query)) { ?>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="img/product1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['name'] ?></h5>
                        <span class="badge bg-primary"><?= $data['price'] ?></span>
                        <p class="card-text"><?= $data['description'] ?></p>
                        <a href="index.php?page=editproduct&kode_product=<?=$data['id']?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <a href="action/actiondeleteproduct.php?kode_product=<?=$data['id']?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin menghapus data ?')"><i class="fas fa-trash"></i> Delete</a>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>
<!-- halaman end content -->