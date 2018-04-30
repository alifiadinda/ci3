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
              <a class="nav-link js-scroll-trigger" href="category">KATEGORI</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<br><br><br><br>

<div>
  <h1><a href='category/create' class='btn btn-sm btn-denger'> Tambah Kategori</a></h1>
</div>
	

    <div class="well well-sm">
      <?php
        foreach ($category as $key) :  ?>
          <div class="row">
            <div class="col-sm-12 col-md-12">
             <table>
             	<tr>
			          <td><font color="white"> ID CATEGORY </font></td>
			          <td><font color="white">:</td></font>
			          <td><font color="white"><?php echo $key->id_cat ?></td></font>
             	</tr>
             	<tr>
             		<td><font color="white">Category Name</td></font>
          			<td><font color="white">:</td></font>
          			<td><font color="white"><?php echo $key->cat_name ?></td></font>

             	</tr>
             	<tr>
             		<td><font color="white">Category Description</td></font>
          			<td><font color="white">:</td></font>
          			<td><font color="white"><?php echo $key->cat_description ?></td></font>
             		  
             	</tr>
              <td>
               <a href='category/Edit/<?php echo $key->id_cat;?>' class='btn btn-sm btn-denger'> Edit </a>     
                <a href='category/delete/<?php echo $key->id_cat;?>' class='btn btn-sm btn-denger'> Hapus </a>         
              </td>
          </div>
      </div>
  </div>
<?php endforeach;?>


<!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/freelancer.min.js"></script>
</body>
</html>