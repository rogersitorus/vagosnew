<?php
include 'db.php';

function uploadAndInsertNews($data) {
    global $koneksi; // Assuming $koneksi is defined in 'db.php'
    $foto = $_FILES['gambar']['name'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $judul = $_POST['judul'];
    $game = $_POST['game'];
    $berita = $_POST['berita'];
    $tanggal = $_POST['tanggal'];

    $target_dir = 'foto/';
    $target_file = $target_dir . basename($foto);

    // Move the uploaded file to the target directory
    if (move_uploaded_file($file_tmp, $target_file)) {
        $query = "INSERT INTO news (news_game, news_tanggal, news_judul, news_isi, news_gambar) 
                  VALUES ('$game', '$tanggal', '$judul', '$berita', '$foto')";

        if (mysqli_query($koneksi, $query)) {
            echo "<script>
            alert('KONFIRMASI BERITA BERHASIL DITAMBAHKAN')
            window.location.href = 'upload-news.php';
            </script>";
        } else {
            die("SQL ERROR: " . mysqli_error($koneksi));
        }
    } else {
        echo "File upload failed.";
    }
}
?>

<?php
include 'db.php';

function uploadAndInsertProduct($data) {
    global $koneksi;
    $foto = $_FILES['gambarproduk']['name'];
    $file_tmp = $_FILES['gambarproduk']['tmp_name'];
    $nama = $_POST['namaproduk'];
    $deskripsi = $_POST['deskripsi'];
    $tipe = $_POST['tipe'];
    $tipe2 = $_POST['tipe2'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $target_dir = 'foto/';
    $target_file = $target_dir . basename($foto);

    // Move the uploaded file to the target directory
    if (move_uploaded_file($file_tmp, $target_file)) {
        $query = "INSERT INTO products (name_items, description_items, type_items, type2, price_items, stock_items, image_items) 
                  VALUES ('$nama', '$deskripsi', '$tipe', '$tipe2', '$harga', '$stok', '$foto')";

        if (mysqli_query($koneksi, $query)) {
            echo "<script>
            alert('KONFIRMASI PRODUK BERHASIL DITAMBAHKAN')
            window.location.href = 'upload-shop.php';
            </script>";
        } else {
            die("SQL ERROR: " . mysqli_error($koneksi));
        }
    } else {
        echo "File upload failed.";
    }
}
?>


<?php 
function registrasi($data){
    global $koneksi; 
    // global $koneksi; // Assuming $koneksi is defined in 'db.php'
    // if (isset($_POST["tambahAdmin"])) {
        // $nama = $_POST['namaAdmin'];
        // $password = $_POST['passwordAdmin'];
    $foto = $_FILES['fotoAdmin']['name'];
    $file_tmp = $_FILES['fotoAdmin']['tmp_name'];
    $email = $_POST['emailAdmin'];
    $alamat = $_POST['alamatAdmin'];
    $nama = strtolower(stripslashes(($data["namaAdmin"])));
    $nama = mysqli_real_escape_string($koneksi,$data["namaAdmin"]);
    $password = mysqli_real_escape_string($koneksi, $data["passwordAdmin"]);
    $target_dir = 'fotoAdmin/';
    $target_file = $target_dir . basename($foto);   

    //cek username terdaftar
    $result = mysqli_query($koneksi,"SELECT admin_nama FROM adminvagos WHERE admin_nama = '$nama'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('NAMA TERSEBUT SUDAH TERDAFTAR')
            window.location.href = 'upload-admin.php'
        </script>";
        exit();
    }
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    // Move the uploaded file to the target directory
    if (move_uploaded_file($file_tmp, $target_file)) {
        $query = "INSERT INTO adminvagos (admin_nama, admin_email, admin_password, admin_alamat, admin_gambar) 
                  VALUES ('$nama', '$email', '$password', '$alamat', '$foto')";
        if (mysqli_query($koneksi, $query)) {
            echo "<script>
            alert('KONFIRMASI DATA BERHASIL DITAMBAHKAN')
            window.location.href = 'upload-admin.php';
            </script>";
            exit();
        } else {
            die("SQL ERROR: " . mysqli_error($koneksi));
        } 
    } else {
        echo "File upload failed.";
    }

}
?>

