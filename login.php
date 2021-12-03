<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- untuk css bootstrap-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- link untuk fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <!-- css footer -->
    <link rel="stylesheet" href="bootstrap/footers.css">
    <title>Halaman Login</title>
</head>

<body>
    <!-- halaman login -->
    <!-- halaman content -->
    <div class="container mt-5 mb-5">
        <h1 class="text-center text-secondary mb-5">Login</h1>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-5 text-center">Login For Your Session</h5>
                        <!-- melakukan pengecekan apakah ada session dengan nama pesan atau tidak -->
                        <?php if (isset($_SESSION['pesan'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">

                                <!-- tampilkan session dengan nama pesan -->
                                <?= $_SESSION['pesan'] ?>
                                <!-- hapus session dengan nama pesan -->
                                <?php unset($_SESSION['pesan']); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php } ?>
                        <!-- akhir pengecekan session -->
                        <form action="ceklogin.php" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-users"></i></span>
                                <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-sign-in-alt"></i> Login</button>
                                <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- halaman end content -->
    <!-- akhir halaman login -->
    <!-- untuk js -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>