<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Shop Coffe</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/business-casual.min.css">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Welcome</span>
      <span class="site-heading-lower">Coffe Online</span>
    </h1>

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="<?php echo base_url() ?>assets/img/products-01.jpg" width="45" height="40"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>#">HOME
                <!-- <span class="sr-only">(current)</span> -->
              </a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>#about">ABOUT</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>blog">BLOG</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>category">KATEGORI</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

      <?php if(!$this->session->userdata('logged_in')) : ?>
                    <center>
                   <div class="btn-group" role="group" aria-label="Data baru">
                        <?php echo anchor('user/register', 'Register', array('class' => 'btn btn-outline-light')); ?>
                        <?php echo anchor('user/login', 'Login', array('class' => 'btn btn-outline-light')); ?>

                    </div>

                <?php endif; ?>

                <?php if($this->session->userdata('logged_in')) : ?>
                    <div class="btn-group" role="group" aria-label="Data baru">

                        <?php echo anchor('blog/tambah', 'Artikel Baru', array('class' => 'btn btn-outline-light')); ?>
                        <?php echo anchor('category/create', 'Kategori Baru', array('class' => 'btn btn-outline-light')); ?>
                        <?php echo anchor('user/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
                    </div>
                <?php endif; ?>

             </div>
         </nav>

       <?php if($this->session->flashdata('user_registered')): ?>
         <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
       <?php endif; ?>
        <?php if($this->session->flashdata('login_failed')): ?>
         <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('login_failed').'</div>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</div>'; ?>
        <?php endif; ?>

         <?php if($this->session->flashdata('user_loggedout')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
        <?php endif; ?>
      </center>
    </nav>

