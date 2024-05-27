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
$db = mysqli_query($koneksi, "SELECT * FROM products");

if (isset($_POST["tambahProduk"])) {
    
    if (uploadAndInsertProduct($data) > 0) {
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
    <?php 
        include "template.php";
        navbarUpload();
    ?>

    <div class="container p-5">
        <p class="h3 text-center">INPUT SHOP</p>
        <div class="container-lg col-md-6 p-2">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                    <input type="text" name="namaproduk" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="deskripsi"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tipe Produk</label>
                    <input type="text" name="tipe" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tipe-2 Produk </label>
                    <input type="text" name="tipe2" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                    <input type="file" name="gambarproduk" class="form-control">
                </div>

                <div class="mb-3 text-end">
                    <button class="btn btn-success" name= "tambahProduk">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js
"></script>
</body>

</html>