<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>Online Shop Coffe</title>

<div> <center>
  <h1><a href='users/register' class='btn btn-sm btn-denger'> Tambah User</a></h1>
</div></center>
	

     <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <table id="dt-basic" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID User</th>
                            <th>Level</th>
                            <th>Nama</th>
                            <th>KodePos</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $d) : ?>
                        <tr>
                            <td><?php echo $d->user_id ?></td>
                            <td><?php echo $d->fk_level_id ?></td>
                            <td><?php echo $d->nama ?></td>
                            <td><?php echo $d->kodepos ?></td>
                             <td><?php echo $d->email ?></td>
                            <td><?php echo $d->username ?></td>
                            <td><?php echo $d->password ?></td>
                            <td>
                                <a href="<?php echo base_url('/users/edit/') . $d->user_id ?>" class="btn btn-sm btn-outline-primary">Edit</a> 
                                <a href="<?php echo base_url('/users/delete/') . $d->user_id ?>" class="btn btn-sm btn-outline-danger">Delete</a> 
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