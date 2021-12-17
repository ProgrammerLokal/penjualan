<?php
// load autoload vendor
require_once __DIR__ . '/vendor/autoload.php';
// include koneksi kedatabase
require_once 'database/config.php';
$query = mysqli_query($con, "select * from tb_users");
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="padding: 20px;">
    <h1 align="center">Laporan Data User</h1>
    <table width="100%" border="1">
        <tr>
            <th>NO</th>
            <th>USERNAME</th>
            <th>NAMA</th>
            <th>ROLE</th>
        </tr>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($query)) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['username']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['role']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>
<?php
$html = ob_get_contents();
ob_end_clean();

$namaDocument = 'Document' . rand(1, 1000);
$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/log']);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($namaDocument . '.pdf', 'D');
?>