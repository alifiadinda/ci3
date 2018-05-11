<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Shop Coffe</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../assets/css/business-casual.min.css">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Welcome</span>
      <span class="site-heading-lower">Coffe Online</span>
    </h1>

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="../assets/img/products-01.jpg" width="45" height="40"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="../home">HOME
                <!-- <span class="sr-only">(current)</span> -->
              </a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="../home">ABOUT</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="../blog">BLOG</a>
            </li>
             <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="../category">Kategori</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


      <?php echo validation_errors(); ?>
      <?php echo form_open_multipart( 'blog/tambah', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

      <table>
        <tr>
          <td><font color="white">Judul</td></font>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
            <td><font color="white">Content</td></font>
          <td>:</td>
          <td><input type="text" name="input_content" value="<?php echo set_value('input_content'); ?>"></td>
        </tr>
        <tr>
            <td><font color="white">Tanggal</td></font>
          <td>:</td>
          <td><input type="text" name="input_tanggal" value="<?php echo set_value('input_tanggal'); ?>"></td>
        </tr>
        <tr>
            <td><font color="white">Gambar</td></font>
          <td>:</td>
          <td><input type="file" name="input_gambar" value="<?php echo set_value('input_gambar'); ?>"></td>
        </tr>
        <tr>
            <td><font color="white">Penulis</td></font>
          <td>:</td>
          <td><input type="text" name="input_penulis" value="<?php echo set_value('input_penulis'); ?>"></td>
        </tr>
        <tr>
            <td><font color="white">Sumber</td></font>
          <td>:</td>
          <td><input type="text" name="input_sumber" value="<?php echo set_value('input_sumber'); ?>"></td>
        </tr>
        <tr>
            <td><font color="white">Lokasi Penulisan</td></font>
          <td>:</td>
          <td><input type="text" name="input_lokasi_penulisan" value="<?php echo set_value('input_lokasi_penulisan'); ?>"></td>
        </tr>
           <tr>
            <td><font color="white">Kategori</td></font>
          <td>:</td>
          <td><?php echo form_dropdown('id_cat', $categories, set_value('id_cat'), 'class="form-control" required' ); ?></td>
        </tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    </div>

       <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
