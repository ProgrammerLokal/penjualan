<?php
require_once 'database/config.php';
$query = mysqli_query($con, "select * from tb_users");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container" id="table">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mb-5">Laporan Data User</h1>
                <table class="table table-striped table-bordered" border="1">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;

                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['username'] ?></td>
                                <td><?= $data['role'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        window.print();
    </script>
</body>

</html>