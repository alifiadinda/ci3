<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>Online Shop Coffe</title>

<div> <center>
  <h1><a href='category/create' class='btn btn-sm btn-denger'> Tambah Kategori</a></h1>
</div></center>
	

     <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <table id="dt-basic" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kategori Name</th>
                            <th>Kategori Deskripsi</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($category as $d) : ?>
                        <tr>
                            <td><?php echo $d->id_cat ?></td>
                            <td><?php echo $d->cat_name ?></td>
                            <td><?php echo $d->cat_description ?></td>
                            <td><?php echo $d->date_created ?></td>
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

