<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="custom.css">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>team-ict</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Poppins:wght@100;300;400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="custom-btn">
  <!-- navbar begin -->
  <?php include('template.php');
        navbar();
  ?>
  <!-- navbar end -->
  <!-- hero begin -->
  <section class="hero-teamict">

    <div class="hero-teamict-nama">
      <h1>FERXICC <br><span>JUNGLER</span></h1>
    </div>

    <div class="hero-teamict-pemain">
      <img src="./img/Evos_Ferxic_S9.png" alt="">
    </div>

    <div class="hero-teamict-info">
      <h1>FERXICC</h1>

      <div class="hero-teamict-info-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum laborum doloribus sint in animi numquam
          voluptatum quasi tempore, porro modi incidunt exercitationem voluptatem vitae eveniet, vel eos odio amet quod.
        </p>

      </div>

      <div class="detilinfo">
        <div class="left">
          <div>
            <h2>ROLE :<br> <span>JUNGLER</span></h2>
            <h2>TEAM :<br> <span>ICT</span></h2>
          </div>
        </div>
        <hr>
        <div class="right">
          <h2>BIRTH DATE :<BR><span>27 JULI 2023</span></BR></h2>
          <H2>PROVINCE :<BR><span>BALI</span></BR></H2>
        </div>

        <canvas></canvas>

      </div>
    </div>

  </section>
  <section class="about-team">
    <h1>VAGOS ICT</h1>
    <div class="team-choice">
      <div class="choice">
        <img src="./img/Evos_Ferxic_S9.png" alt="">
        <h2><b>NAMA PLAYER</b> <br> <span>ROLE</span></h2>
      </div>
      <div class="choice">
        <img src="./img/Evos_Ferxic_S9.png" alt="">
        <h2><b>NAMA PLAYER</b> <br> <span>ROLE</span></h2>
      </div>
      <div class="choice">
        <img src="./img/Evos_Ferxic_S9.png" alt="">
        <h2><b>NAMA PLAYER</b> <br> <span>ROLE</span></h2>
      </div>
      <div class="choice">
        <img src="./img/Evos_Ferxic_S9.png" alt="">
        <h2><b>UNKNOWN</b> <br> <span>ROLE</span></h2>
      </div>
      <div class="choice">
        <img src="./img/Evos_Ferxic_S9.png" alt="">
        <h2><b>PLAYER NOT FOUND</b> <br> <span>ROLE</span></h2>
      </div>


    </div>
    <div class="team-achievments">
      <div class="container">
        <h1 class="achievement-title">ACHIEVEMENT</h1>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/teamef.png" alt="" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/teamlol.png" alt="" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/teamml.png" alt="" style="width:100%;">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="match-count">
        <h1><b><span>10</span> champions</b></h1>
        <img src="image/about-garis.png" alt="">
        <div class="match-count-container">
          <div>
            <h3><span>230+</span> <br> MATCH</h3>
          </div>
          <div>
            <h3><span>70+</span> <br> 2nd/3rd</h3>
          </div>
          <div>
            <h3><span>150+</span> <br> UNKNOWN</h3>
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
</body>

</html>