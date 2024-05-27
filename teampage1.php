<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="custom.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="website icon" type="png" href="img/ONLY-logovagos.png" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>teampage1</title>
  </head>

  <body class="custom-btn">
    <!-- NAVBAR SECTION -->
    <?php include('template.php');
        navbar();
    ?>
        <!-- NAVBAR SECTION SELESAI -->

    <section class="hero-teampage1">
      <div><img src="img/newteampage1hero.png" alt= /></div>
    </section>

    <section class="pilihan-teampage1">
      <h1 class="check">
        LET'S
        <span
          >CHECK YOUR <br />
          FAFORITE</span
        >
        DEVISIONS
      </h1>
      <div class="team-ml">
        <div>
          <a href="team-ict.php"><img src="img/teamml.png" alt="" /></a>
        </div>
        <div>
          <a href=""><img src="img/teampubg.png" alt="" /></a>
        </div>
        <div>
          <a href=""><img src="img/teamff.png" alt="" /></a>
        </div>
        <div>
          <a href=""><img src="img/teamlol.png" alt="" /></a>
        </div>
        <div>
          <a href=""><img src="img/teamef.png" alt="" /></a>
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