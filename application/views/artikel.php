<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Shop Coffe</title>

    <div class="container text-center">
      <?php foreach ($artikel as $key): ?>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <table style="margin-bottom: 30px;">
            <tr>
              <td>
                <a href="detail/<?php echo $key->id_blog ?>" style="color: black;">
                  <img src="../img/<?php echo $key->image;?>" alt="Image" width="500" height="400">
                  <br>
                  <font color="white">
                  <?php echo $key->judul_blog ?>
                </a>
                <br><br>
              </td>
            </tr>
          </table>
        </div>
      <?php endforeach ?>
    </div>

  



     <!--  <table>
        <tr>
          <td><font color="white">Judul</font></td>
          <td>:</td>
          <td><input type="text" name="input_judul" value=""></td>
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
        <tr> 


        </tr>
      </table>
    </div>-->
  
   



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
