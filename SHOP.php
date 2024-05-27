  <!DOCTYPE html>
  <html lang="en">

  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- <link rel="website icon" type="png" 
      href="img/ONLY-logovagos.png"> -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet" />
    <link rel="stylesheet" href="custom.css" />
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>

  <body class="custom-btn">
  <script src="https://kit.fontawesome.com/41457a3def.js" crossorigin="anonymous"></script>
    <?php 
    session_start();
    include 'db.php';
    $db = "SELECT * FROM products ORDER BY id_items DESC";
    $catch = $koneksi->query($db);
    ?>

    <!-- navbar begin -->
    <?php 
        include 'template.php';
        navbarShop();
    ?>
    <!-- navbar end -->

    <!-- hero begin -->
    <section class="hero-shop">
      <div>
        <h1>VAGOS T-SHIRT</h1>
        <button class="button-to-shop">SHOP NOW</button>
      </div>

    </section>
    <section class="main-shop">
      <div class="all">

        <img src="img/Line 14.png" alt="" />
        <h1>ALL</h1>
        <img src="img/Line 14.png" alt="" />

      </div>
      <div class="shop-main-container">
        <?php 
          $count = 1;
          while ($product = mysqli_fetch_assoc($catch)) { 
        ?>
        <div class="shop-main-card">
          <a href="t-shirt-shop-page.php?id=<?php echo $product['id_items']; ?>">
            <img src="./foto/<?php echo $product["image_items"]; ?> " alt="">
            <div class="shop-main-card-detil">
              <h4><?php echo $product["name_items"];?></h4>
              <p><?php echo $product["type2"]; ?></p>
            </div>
          </a>
        </div>
        <?php
          $count++;
          if($count>=15){
          break;
          }
        ?>
        <?php };?> 
      </div>
      <aside><button class="view-more-shop">VIEW MORE</button></aside>

      <div class="more-shop">
        <div class="more-shop-detil">
          <img src="img/oficial jersey.png" alt="" />
          <div>
            <h2>OFFICIAL JERSEY</h2>
            <button>SHOP NOW</button>
          </div>
        </div>

        <div class="more-shop-detil">
          <img src="img/basic.png" alt="" />
          <div>
            <h2>BASIC</h2>
            <button>SHOP NOW</button>
          </div>
        </div>
        
        <div class="more-shop-detil">
          <img src="img/accesories.png" alt="" />
          <div>
            <h2>ACCESORIES</h2>
            <button>SHOP NOW</button>
          </div>
        </div>
      </div>

      <div class="more-shop-none">
        <div class="more-shop-hp">
          <div class="more-shop-hp-slide">
            <img src="img/oficial jersey.png" alt="" />
            <div>
              <h2>BASIC</h2>
              <button>SHOP NOW</button>
            </div>
          </div>
          <div class="more-shop-hp-slide">
            <img src="img/basic.png" alt="" />
            <div>
              <h2>BASIC</h2>
              <button>SHOP NOW</button>
            </div>
          </div>
          <div class="more-shop-hp-slide">
            <img src="img/accesories.png" alt="" />
            <div>
              <h2>BASIC</h2>
              <button>SHOP NOW</button>
            </div>
          </div>

        </div>
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