<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Shop Coffe</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../../assets/css/business-casual.min.css">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Welcome</span>
      <span class="site-heading-lower">Coffe Online</span>
    </h1>

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="../../assets/img/products-01.jpg" width="45" height="40"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>home">HOME
                <!-- <span class="sr-only">(current)</span> -->
              </a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>home">ABOUT</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>blog">BLOG</a>
            </li>
             <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>category">Kategori</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    
            <?php
            $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
          ?>
          <?php echo validation_errors(); ?>
          <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
          <?php echo form_open_multipart(current_url(), array('class' => 'needs-validation', 'novalidate' => '')); ?>
          <div class="form-group">
            <label for="title">Judul Blog</label>
            <input type="text" class="form-control" name="judul_blog" value="<?php echo set_value('judul_blog', $artikel->judul_blog) ?>" required>
        
          </div>
          <div class="form-group">
            <label for="title">Tanggal Blog</label>
            <input type="date" class="form-control" name="tanggal_blog" value="<?php echo set_value('tanggal_blog', $artikel->tanggal_blog) ?>" required>
            <div class="invalid-feedback">Isi Tanggal</div>
          </div>
          <div class="form-group">
            <label for="title">Content</label>
            <input type="text" class="form-control" name="content" value="<?php echo set_value('content', $artikel->content) ?>" required>
            <div class="invalid-feedback">Isi Kontent</div>
          </div>
          <div class="form-group">
            <label for="title">Sumber</label>
            <input type="text" class="form-control" name="sumber" value="<?php echo set_value('sumber', $artikel->sumber) ?>" required>
            <div class="invalid-feedback">Isi sumber</div>
          </div>
           <div class="form-group">
            <label for="title">Lokasi Penulisan</label>
            <input type="text" class="form-control" name="lokasi_penulisan" value="<?php echo set_value('lokasi_penulisan', $artikel->lokasi_penulisan) ?>" required>
            <div class="invalid-feedback">Isi Lokasi</div>
          </div>
          <div class="form-group">
            <label for="title">Penulis</label>
            <input type="text" class="form-control" name="penulis" value="<?php echo set_value('penulis', $artikel->penulis) ?>" required>
            <div class="invalid-feedback">Isi Penulis</div>
          </div>
       <div class="form-group">
            <label>Kategori</label>
            <?php echo form_dropdown('id', $categories, set_value('id', $artikel->id_cat), 'class="form-control" required' ); ?>
            <div class="invalid-feedback">Pilih dulu kategorinya gan</div>
          </div>
          <div class="form-group">
            <?php if( $artikel->image ) : ?>
            <img class="card-img-top" src="<?php echo base_url() .'img/'. $artikel->image ?>" alt="Card image cap" width=300>
            <?php endif; ?>

            <label for="thumbnail">Gambar</label>
            <input type="file" class="form-control-file" name="thumbnail">
          </div>
          <button id="submitBtn" type="submit" class="btn btn-primary">Post</button>
        </form>
    
  </div>
  <div style="clear:both; height: 40px"></div>
</div>
  

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">

  <script src="<?php echo base_url() ?>assets/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?php echo base_url() ?>assets/js/holder.min.js"></script>

    <!-- Custom -->
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>