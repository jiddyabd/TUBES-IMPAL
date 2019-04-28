<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Telkomedika - Pelanggan</title>

<!--     <link href="<?php echo path("/assets/img/logo.png"); ?>" rel="shortcut icon">
    <link href="<?php echo path("/assets/css/primary.css"); ?>" rel="stylesheet">
    <link href="<?php echo path("/assets/css/index.css"); ?>" rel="stylesheet">
    <link href="<?php echo path("/assets/css/footer.css"); ?>" rel="stylesheet"> -->
  </head>

  <body id="page-top">
<!--     <?php
      include "../popup.php";
      if (isset($_SESSION['log_pas'])){
        $av = $_SESSION['log_pas'];
      }
    ?> -->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo path("/"); ?>">
          <img class="img-fluid" src="<?php echo path("/assets/img/logo.png"); ?>" width=80px alt="">
          &nbsp;PEOP Corp X Telkomedika
        </a>
      </div>
    </nav>

     <!-- Portfolio Grid -->
    <section id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">LOG MASUK</h2>
          </div>
        </div>
      </div>
      <!-- Login -->
      <form action="proses_login.php" class="col-12 text-center" method="post">
        <div class="form-group">
          <input type="email" class="btn js-scroll-trigger" id="email" placeholder="Kata Pengguna" name="email" value="<?php if(isset($av)){echo $av;} ?>" required>
        </div>
        <div class="form-group">
          <input type="password" class="btn js-scroll-trigger" id="pwd" placeholder="Kata Laluan" name="password" required>
        </div>
        <!-- Tombol Registrasi -->
        <button type="submit" class="btn btn-pelanggan text-uppercase js-scroll-trigger">&nbsp;OK&nbsp;</button>
        <!-- Link untuk yang belum memiliki akun -->
        <p>
          <br>Tidak mempunyai akaun?
          <a href="pasien_registrasi" class="">Daftar Keluar</a><br>
        </p>
      </form>
    </section>

    <?php include "../footer.php"; ?>

    <!-- Pemanggilan Javascript  -->
    <script src="<?php echo path("/assets/js/navbar.js"); ?>"></script>

  </body>
</html>
