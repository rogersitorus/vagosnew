<?php 

session_start();

    if (isset($_SESSION["login"])) {
        header("Location: upload-admin.php");
        exit;
    }
require 'db.php';
require 'action.php';
    if (isset($_POST["login"])) {
        $nama = $_POST["namaAdmin"];
        $password = $_POST["passwordAdmin"];
        $result = mysqli_query($koneksi, "SELECT * FROM adminvagos WHERE admin_nama = '$nama'");
        
        if (mysqli_num_rows($result) === 1 ) {
            //cek password
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["admin_password"])) {
                echo "<script>alert('BERHASIL')</script>";
                $_SESSION["login"] = TRUE;
                header("Location: upload-admin.php");
            }  
        }
        $error = TRUE;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        .hero-navbar {
            position: relative;
        }
        
        label {
            color: black;
        }
    </style>
    <!-- <script>
        function loginBerhasil() {
            console.log('Function berhasil dipanggil');
            alert('Login berhasil');
        }
    </script> -->
</head>

<body style="background-color: var(--bg);" class="login-body">
    
    <!-- NAVBAR SECTION -->
    <?php include('template.php');
        navbar();
    ?>
    <!-- NAVBAR SECTION SELESAI -->
    <section class="login-all" id="section-login"> 
        <div class="container-xl p-5 bg-light">
            <header class="login-header">
                <img src="image/user (1).png" alt="">
                <h1>LOGIN</h1>
            </header>
            <div class="container-lg col-md-5 p-2">
                <?php if (isset($error)) :?>
                <script>
                    window.location.href = '#section-login'
                </script>
                    <p style="color: red; font-style: italic;">USERNAME ATAU PASSWORD SALAH</p>
                <?php endif;?>
                <form action="" method="post" >
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama</label>
                        <input type="text" name="namaAdmin" class="form-control" id = "username">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="passwordAdmin" class="form-control" id= "password">
                    </div>

                    <div class="mb-3 text-end">
                        <button class="btn btn-success" name="login" type="submit">LOGIN</button>
                    </div>
                </form>
            </div>
            <!-- <div class="login-main-feature">
                <a href="register.php">Don't Have An Account? <span>Sign Up</span></a>
            </div> -->
        </div>

    </section>
    <!-- FOOTER SECTION -->
    <?php 
        footer();
    ?>
    <!-- FOOTER SECTION SELESAI -->
    <script src="./script.js"></script>
</body>

</html>