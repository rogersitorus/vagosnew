<?php 
function navbar(){
    echo '
    <div class="hero-navbar">
    <div class="hero-navbar-logo">
        <a href="home.php" class="hero-navbar-logo-img"><img src="image/logo.png" alt=""></a>
    </div>
    <div class="hero-navbar-nav">
        <ul class="ul-navbar">
            <a href="news.php">
                <li class="news-start">News</li>
            </a>
            <a href="teampage1.php">
                <li>Teams</li>
            </a>
            <a href="partners1.php">
                <li>Partners</li>
            </a>
            <a href="about.php">
                <li>About</li>
            </a>
        </ul>
    </div>

    <div class="hero-navbar-feature">
        <div class="hero-navbar-shop">
            <a href="SHOP.php">
                <li>VAGOS OFFICIAL SHOP</li>
            </a>
        </div>
        <div class="hero-navbar-menu" onclick="tampilNavbar()">
            <img src="./image/menu.png" alt="">
        </div>
    </div>
</div>
';}

function footer(){
    echo '
    <section class="footer">
    <div class="footer-logo">
        <a href="home.php"><img src="image/logo.png" alt="" class="footer-logo-img" /></a>
    </div>
    <div class="footer-info">
        <h1>TEAM <span>VAGOS</span></h1>
        <ul>
            <a href="news.php">
                <li>News</li>
            </a>
            <a href="teampage1.php">
                <li>Teams</li>
            </a>
            <a href="partners1.php">
                <li>Partners</li>
            </a>
            <a href="about.php">
                <li>About</li>
            </a>
        </ul>
    </div>
    <div class="footer-sosmed">
        <a href="https://www.youtube.com/@teamvagosesports772"><img src="image/youtube.png" alt="" /></a>
        <a href="https://www.tiktok.com/@teamvagos.id"><img src="image/tiktok.png" alt="" /></a>
        <a href="https://www.instagram.com/teamvagos.id/"><img src="image/instagram.png" alt="" /><br /></a>
        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.studiokami.vagos">
            <h2>DOWNLOAD APP</h2>
        </a>
    </div>
    <div class="footer-copyright">
        <h2>Copyright TEAM VAGOS ID 2023</h2>
    </div>
</section>
';}

function navbarUpload(){
    echo '
    <nav class="navbar navbar-expand-lg bg-info bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="upload-admin.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="upload-news.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="upload-shop.php">Shop</a>
                    </li>
                </ul>
                <form action="" method="post">
                    <button class="btn btn-outline-success" type="submit">
                        <a href="index.php">HOME</a>
                    </button>
                    <button class="btn btn-outline-success ms-2" type="submit" name="logout">
                        LOGOUT
                    </button>
                </form>
            </div>
        </div>
    </nav>
    ';
    
}

function navbarShop(){
    echo '
    <section class="navbar-shop">
      <div class="logo-vagos">
        <a href="home.php"><img src="./img/logovagos.png" alt="" /></a>
      </div>

      <div class="nav-shop-a">
        <div class="nav-shop-acc">
          <a href="login.php"><img src="img/acc logo.png" alt="" /></a>
          <h4>ACCOUNT</h4>
        </div>

        <div class="nav-shop-cart" onclick="tampilCart()">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i><sup>4</sup></a>
        </div>
      </div>
    </section>

    <div class="navbar-sidebar">
      <div class="navbar-sidebar-header">
        <h1>CART</h1>
      </div>
      <div class="navbar-sidebar-content">
        <h1>YOUR CART IS EMPTY</h1>
      </div>
    </div>
    ';
}
?>

