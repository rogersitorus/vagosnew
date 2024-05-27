<?php 
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST["logout"])) {
    $_SESSION = [];
    session_unset();
    session_destroy();
}

require 'db.php';
require 'action.php';
$db = mysqli_query($koneksi, "SELECT * FROM news");

if (isset($_POST["tambahNews"])) {
    
    if (uploadAndInsertNews($data) > 0) {
        echo "<script>
            alert('NEWS BERHASIL DITAMBAHKAN');
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css
">

<body>
    <!--NAVBAR BEGIN-->
    <?php 
        include "template.php";
        navbarUpload();
    ?>
    <!--NAVBAR END-->
    <div class="container p-5">
        <p class="h3 text-center">INPUT NEWS</p>
        <div class="container-lg col-md-6 p-2">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Game</label>
                    <input type="text" name="game" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
                    <input type="text" name="judul" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Isi Berita</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

                <div class="mb-3 text-end">
                    <button class="btn btn-success" name="tambahNews">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>