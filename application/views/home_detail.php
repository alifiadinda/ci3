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
              <a class="nav-link js-scroll-trigger" href="../../home">HOME
                <!-- <span class="sr-only">(current)</span> -->
              </a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="../../home">ABOUT</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="../../blog">BLOG</a>
            </li>
             <li class="nav-item active px-lg-4">
              <a class="nav-link js-scroll-trigger" href="../../category">Kategori</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    

    <?php foreach ($detail as $key): ?>
      <div class="container">
        <table>
          <tr class="text-center">
            <td>
              <font color="white">
              <h3><b><?php echo $key->judul_blog; ?></b><h3>
              </td>
          </tr>
          <tr>
            <td class="text-center">
              <img src="../../img/<?php echo $key->image;?>" alt="Image" width="500" height="400">
              <font color="white">
              <br></br>
              <br></br>
              <br></br>
              <?php echo $key->tanggal_blog; ?>
              <br></br>
              <br></br>
              <br></br>

            </td>
          </tr>
          <tr>
            <td class="text-justify">
              <font color="white">
              <?php echo $key->content; ?>
            </td>
          </tr>

          <tr>
            <td class="text-justify">
              <font color="white">
             Penulis: <?php echo $key->penulis; ?>
            </td>
          </tr>

          <tr>
            <td class="text-justify">
              <font color="white">
             Sumber: <?php echo $key->sumber; ?>
            </td>
          </tr>

          <tr>
            <td class="text-justify">
              <font color="white">
             Lokasi Penulisan: <?php echo $key->lokasi_penulisan; ?>
            </td>
          </tr>

        </table><br><br><center>
         <a href="<?php echo base_url(). 'blog/edit/' . $key->id_blog ?>" class="button" ><span class="fa fa-edit"></span> Edit</a>
          <a href="<?php echo base_url(). 'blog/delete/' . $key->id_blog ?>" class="button" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span class="fa fa-trash"></span> Hapus</a>
        </center>
      </div>
      <?php endforeach ?>


    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
