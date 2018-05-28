<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>Online Shop Coffe</title>

<div> <center>
  <h1><a href='blog/tambah' class='btn btn-sm btn-denger'> Tambah Blog</a></h1>
</div></center>

   

 <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <table id="dt-basic" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Foto</th>
                            <th>Tanggal</th>
                            <th>Kategori</th>
                            <th>Content</th>
                            <th>Lokasi Penulisan</th>
                            <th>Sumber</th>
                            <th>Penulis</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($artikel as $d) : ?>
                        <tr>
                            <td><?php echo $d->id_blog ?></td>
                            <td><?php echo $d->judul_blog ?></td>
                            <td><?php echo $d->image ?></td>
                            <td><?php echo $d->tanggal_blog ?></td>
                            <td><?php echo $d->cat_name ?></td>
                            <td><?php echo $d->content ?></td>
                            <td><?php echo $d->lokasi_penulisan ?></td>
                            <td><?php echo $d->sumber ?></td>
                            <td><?php echo $d->penulis ?></td>
                            <td>
                                <a href="<?php echo base_url('/category/edit/') . $d->id_cat ?>" class="btn btn-sm btn-outline-primary">Edit</a> 
                                <a href="<?php echo base_url('/category/delete/') . $d->id_cat ?>" class="btn btn-sm btn-outline-danger">Delete</a>  
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    
</main>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.bootstrap4.min.js"></script>
<script>
    jQuery(document).ready(function(){

        // Contoh inisialisasi Datatable tanpa konfigurasi apapun
        // #dt-basic adalah id html dari tabel yang diinisialisasi
        $('#dt-basic').DataTable();
    });

</script>


    </div>
  </font>
</a>
</td>
</tr>
</table>
</div>
</div>
          <br>

<?php 
    // $links ini berasal dari fungsi pagination 
    // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
    if (isset($links)) {
      echo $links;
    } 
    ?>
   
</html>
