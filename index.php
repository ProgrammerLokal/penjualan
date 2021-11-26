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
    <title>Halaman Home</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-home text-white"></i>
                            Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=product"><i class="fab fa-product-hunt text-white"></i> Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=about"><i class="fas fa-building text-white"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=login" class="nav-link"><i class="fas fa-sign-in-alt text-white"></i> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="b-example-divider"></div>
    <!-- end navbar -->

    <!-- halaman content dinamis -->
    <?php include 'page.php'; ?>
    <!-- akhir halaman content dinamis -->

    <!-- footer -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">&copy; 2021 Company, Inc</p>

            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
        </footer>
    </div>
    <div class="b-example-divider"></div>
    <!-- end footer -->
    <!-- untuk js -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>