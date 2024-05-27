<?php 
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
}

require 'db.php';
require 'action.php';
$db = mysqli_query($koneksi, "SELECT * FROM adminvagos");

if (isset($_POST["tambahAdmin"])) {
    
    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('ADMIN BERHASIL DITAMBAHKAN');
        </script>";
    }
    else{
        echo mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>

<body>
    <!--NAVBAR BEGIN-->
    <?php 
        include "template.php";
        navbarUpload();
    ?>
    <!--NAVBAR END-->
    <div class="container p-5">
        <p class="h3 text-center">INPUT ADMIN</p>
        <div class="container-lg col-md-6 p-2">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" name="namaAdmin" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="emailAdmin" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" name="passwordAdmin" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input type="text" name="alamatAdmin" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Foto</label>
                    <input type="file" name="fotoAdmin" class="form-control">
                </div>

                <div class="mb-3 text-end">
                    <button class="btn btn-success" name="tambahAdmin">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>

    <table border="5px" width=100%>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
            <th>Alamat</th>
            <th>Gambar</th>
        </tr>
        <?php while ($lol = mysqli_fetch_assoc($db)) {
            ?>
        <tr>
        <td><?php echo $lol["admin_id"]; ?></td>
        <td><?php echo $lol["admin_nama"]; ?></td>
        <td><?php echo $lol["admin_email"]; ?></td>
        <td><?php echo $lol["admin_password"]; ?></td>
        <td><?php echo $lol["admin_alamat"]; ?></td>
        <td><?php echo $lol["admin_gambar"]; ?></td>
        </tr>

        <?php }?>

    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

