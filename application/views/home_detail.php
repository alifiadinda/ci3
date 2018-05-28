<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Shop Coffe</title>
    

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
  </head>

</html>
