<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="news.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Poppins:wght@100;300;400;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php 
        include 'db.php';
        $db = "SELECT * FROM news ORDER BY news_id DESC";
        $catch = $koneksi->query($db);
    ?>
    <!-- HERO SECTION -->
    <section class="news-main-hero">
        <!-- NAVBAR SECTION -->
        <?php include('template.php');
        navbar();
    ?>
        
        <!-- NAVBAR SECTION SELESAI -->
    </section>
    <!-- HERO SECTION SELESAI -->

    <!-- CONTENT SECTION -->
    <section class="news-section">
        <div class="news-title-container">
            <img src="./image/garis.png" alt="">
            <h2 class="news-title">NEWS</h2>
            <img src="./image/garis.png" alt="">
        </div>
        <div class="news-container">
            <!-- COBA PHP KE NEWS-->
            <?php 
            $count = 0;
            while ($lol = mysqli_fetch_assoc($catch)) { 
            ?>
            <div class="news-card">
                <img src="./foto/<?php echo $lol["news_gambar"]; ?> " alt="">
                <div class="news-header">
                    <div class="news-game">
                        <p><?php echo $lol["news_game"]; ?></p>
                    </div>
                    <div class="news-date">
                        <p><?php echo $lol["news_tanggal"]; ?></p>
                    </div>
                </div>
                <div class="news-card-title">
                    <h3><?php echo $lol["news_judul"]; ?></h3>
                </div>
            </div>
                <br><br><br><br><br><br><br><br><br><br><br>
                <?php
                $count++;
                if($count>9){
                    break;
                }
                ?>
                <?php };?> 
            </div>
            <div class="news-page">
                <button>Prev</button>
                <button>1</button>
                <button>2</button>
                <button>3</button>
                <button>...</button>
                <button>10</button>
                <button>Next>></button>
            </div>
        </section>
    </section>
    <!-- CONTENT SECTION SELESAI-->

    <!-- HIRING SECTION -->
    <section class="news-hiring">
        <h1 class="news-hiring-title">HIRING & TRIALS</h1>
        <div class="news-hiring-section">
            <div class="news-hiring-container">
                <div class="news-hiring-card">
                    <img src="image/hiring1.jpg" alt="">
                    <h2>Videographer</h2>
                    <h3>1 Juli 2023</h3>
                </div>
                <div class="news-hiring-card">
                    <img src="image/hiring2.jpg" alt="">
                    <h2>Social Media Specialist</h2>
                    <h3>10 Juli 2023</h3>
                </div>
                <div class="news-hiring-card">
                    <img src="image/hiring3.jpg" alt="">
                    <h2>Senior Back-End Dev</h2>
                    <h3>15 Juli 2023</h3>
                </div>
            </div>

        </div>
        <div class="view-button">
            <a href="https://www.instagram.com/studiokamimandiri/">
                <h2>View More</h2>
            </a>
        </div>

    </section>
    <!-- HIRING SECTION SELESAI-->

    <!-- FOOTER SECTION -->
    <?php
        footer();
    ?>
    <!-- FOOTER SECTION SELESAI -->
    <script src="./script.js"></script>
</body>