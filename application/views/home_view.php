<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Shop Coffe</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/business-casual.min.css">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Welcome</span>
      <span class="site-heading-lower">Coffe Online</span>
    </h1>

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/img/products-01.jpg" width="45" height="40"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="home">HOME
                <!-- <span class="sr-only">(current)</span> -->
              </a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="home">ABOUT</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="blog">BLOG</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="blog">KATEGORI</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

     <center> <td colspan="3"><input type="submit" name="simpan" value="Create Artikel"></td> </center> <br><br>

    <div class="container text-center">
      <?php foreach ($artikel as $key): ?>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <table style="margin-bottom: 30px;">
            <tr>
              <td>
                <a href="blog/detail/<?php echo $key->id_blog ?>" style="color: black;">
                  <img src="img/<?php echo $key->image;?>" alt="Image" width="500" height="400">
                  <br>
                  <font color="white">
                  <?php echo $key->judul_blog ?>
                </a>
                <br><br>
                <a href='blog/edit/<?php echo $key->id_blog;?>' class='btn-btn-sm btn-info'>edit</a>
                <a href='blog/delete/<?php echo $key->id_blog;?>' class='btn-btn-sm btn-danger'>Hapus</a>
              </td>
            </tr>
          </table>
        </div>
      <?php endforeach ?>
    </div>

     <div class="container">
      <?php
        echo form_open('blog/tambah', array('enctype'=>'multipart/form-data')); 
       ?>

       <?php echo form_open( 'category/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

 <?php echo form_open( 'category/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

<div class="form-group">
  <font color="white">
   <label for="cat_name">Nama Kategori</label>
   <input type="text" class="form-control" name="cat_name" value="<?php echo set_value('cat_name') ?>" required>
   <div class="invalid-feedback">Isi judul dulu </div>
 </font>
</div>

<div class="form-group">
   <font color="white">
   <label for="text">Deskripsi</label>
   <input type="text" class="form-control" name="cat_description" value="<?php echo set_value('cat_description') ?>" required>
   <div class="invalid-feedback">Isi deskripsinya dulu</div>
 </font>
</div>
<button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button>

     <!--  <table>
        <tr>
          <td><font color="white">Judul</font></td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
          <td><font color="white">Content</font></td>
          <td>:</td>
          <td><input type="text" name="input_content" value=""></td>
        </tr>
        <tr>
          <td><font color="white">Tanggal</font> </td>
          <td>:</td>
          <td><input type="date" name="input_tanggal" value=""></td>
        </tr>
        <tr>
          <td><font color="white">Gambar</font></td>
          <td>:</td>
          <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr> -->
          <br>
         

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
