<?php
include 'db.php';

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $query = "SELECT * FROM products WHERE id_items = '$product_id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $product = mysqli_fetch_assoc($result);
    } else {
        die("Product not found: " . mysqli_error($koneksi));
    }
} else {
    die("Product ID not provided.");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="website icon" type="png" href="img/ONLY-logovagos.png" /> -->
    <title>Document</title>
    <link rel="stylesheet" href="custom.css" />
    <link rel = "stylesheet" href="style.css"/>
  </head>
  <body class="custom-btn">
  <script src="https://kit.fontawesome.com/41457a3def.js" crossorigin="anonymous"></script>

    <!-- navbar begin -->
    <?php 
        include 'template.php';
        navbarShop();
    ?>
    <!-- navbar end -->
    <?php 
    include 'db.php';
    $db = "SELECT * FROM products ORDER BY id_items DESC";
    $catch = $koneksi->query($db);
    ?>
    <section class="shop-detils">
      <div class="shop-pic">
        <div class="left">
          <img src="./foto/<?php echo $product["image_items"]; ?>" alt="">
          <img src="./foto/<?php echo $product["image_items"]; ?>" alt="">
          <img src="./foto/<?php echo $product["image_items"]; ?>" alt="">
        </div>
        <div class="right">
          <img src="./foto/<?php echo $product["image_items"]; ?>" alt="">
          <img src="./foto/<?php echo $product["image_items"]; ?>" alt="">
          <img src="./foto/<?php echo $product["image_items"]; ?>" alt="">
        </div>
      </div>

      <div class="pic-hp">
        <div class="slides">
          <div id="slide-1"><img src="./foto/<?php echo $product["image_items"]; ?>" alt=""></div>
          <div id="slide-1"><img src="./foto/<?php echo $product["image_items"]; ?>" alt=""></div>
          <div id="slide-1"><img src="./foto/<?php echo $product["image_items"]; ?>" alt=""></div>
        </div>
        <a href="#slide-1"><img src="./foto/<?php echo $product["image_items"]; ?>" alt=""></a>
        <a href="#slide-2"><img src="./foto/<?php echo $product["image_items"]; ?>" alt=""></a>
        <a href="#slide-3"><img src="./foto/<?php echo $product["image_items"]; ?>" alt=""></a>
      </div>
      <div class="product-desc-container">
        <div class="product-desc">
          <h1><?php echo $product["name_items"]; ?></h1>
          <h3><?php echo $product["type_items"]; ?></h3>
          <h4>Rp <?php echo number_format($product["price_items"], 0, ',', '.'); ?></h4>
          <img src="img/Line 14.png" alt="" />
          <p><?php echo nl2br($product["description_items"]); ?></p>
          <h3 style="font-size: 1.5vmax; font-weight: 900">
            GET YOUR STYLE UP WITH VAGOS MERCH!
          </h3>
          <img src="img/Line 14.png" alt="" />
        </div>

        <div class="product-desc-input">
          <div class="input-container">
            <h1>Size :</h1>
            <select class="size-option">
              <option value="small">S</option>
              <option value="medium">M</option>
              <option value="large">L</option>
              <option value="X-large">XL</option>
            </select>
          </div>
        </div>
        <button class="product-desc-button">
          <h1 style="margin: 0 auto">ADD TO CART</h1>
        </button>
      </div>
    </section>

    <section class="related-product">
      <div class="rp-title">
        <img src="img/Line 14.png" alt="" />
        <h1>LATEST PRODUCT</h1>
        <img src="img/Line 14.png" alt="" />
      </div>

      <div class="rp-main">
      <?php 
        $count = 1;
        while ($product = mysqli_fetch_assoc($catch)) { 
       ?>
        <div class="rp-card">
        <img src="./foto/<?php echo $product["image_items"]; ?> " alt="">
          <h3><?php echo $product["name_items"];?></h3>
          <p>Rp <?php echo number_format($product["price_items"], 0, ',', '.'); ?></p>
        </div>
      
        <?php
        $count++;
        if($count>=4){
        break;
        }
        ?>
      <?php };?> 
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