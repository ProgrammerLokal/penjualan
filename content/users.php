<?php
$search = $_GET['search'] ?? '';

$query = mysqli_query($con, "select * from tb_users");

if ($search) {
    $query = mysqli_query($con, "select * from tb_users where nama like '%$search%' or username like '%$search%'");
}
// var_dump($query);
?>
<!-- halaman content -->
<div class="container mt-5 mb-5">
    <h1 class="text-center text-secondary mb-5">Users</h1>
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
        <form action="">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <input type="hidden" name="page" value="users">
                    <input type="text" class="form-control" name="search" value="<?= $search ?>" placeholder="Masukan pencarian..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <button type="submit" class="btn btn-primary" id="basic-addon2"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Name</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td align="center">
                                <a id="detail_user" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?php echo $data['id']; ?>" data-username="<?php echo $data['username']; ?>" data-nama="<?php echo $data['nama']; ?>" data-role="<?php echo $data['role']; ?>"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="eksport_user.php" class="btn btn-dark" title="print"><i class="fa fa-print"></i></a>
        </div>
    </div>

</div>
<!-- halaman end content -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <ul class="list-group">
                    <li class="list-group-item" id="user_id">An item</li>
                    <li class="list-group-item" id="user_username">A second item</li>
                    <li class="list-group-item" id="user_nama">A third item</li>
                    <li class="list-group-item" id="user_role">A fourth item</li>
                </ul>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<script>
    // mengambil elemen dengan id detail user
    let user = document.querySelectorAll('#detail_user');
    // melakukan perulangan dari variabel user
    user.forEach(element => {
        element.addEventListener('click', function(event) {
            // menampung hasil dari pengambilan attribut kedalam variabel
            let id = $(this).attr('data-id');
            let username = $(this).attr('data-username');
            let nama = $(this).attr('data-nama');
            let role = $(this).attr('data-role');

            $('#user_id').html('Id User : ' + id);
            $('#user_username').html('Username : ' + username);
            $('#user_nama').html('Nama User : ' + nama);
            $('#user_role').html('Role User : ' + role);

            // document.getElementById('user_id').innerHTML = 'Id User : ' + id;
            // document.getElementById('user_username').innerHTML = 'Username : ' + username;
            // document.getElementById('user_nama').innerHTML = 'Nama User : ' + nama;
            // document.getElementById('user_role').innerHTML = 'Role User : ' + role;
        });
    });
</script>