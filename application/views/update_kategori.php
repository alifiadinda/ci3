<!DOCTYPE html>
<html lang="en">
	<div class="container">
    <?php foreach ($single as $key): ?>
      <?php
        echo form_open('category/Edit/'.$key->id_cat, array('enctype'=>'multipart/form-data')); 
       ?>
	<table>
        <tr>
          <td>Id Kategori</td>
          <td>:</td>
          <td><input type="text" name="id" readonly value="<?php echo $key->id_cat; ?>"></td>
        </tr>
        <tr>
          <td>Nama Kategori</td>
          <td>:</td>
          <td><input type="text" name="cat_name" value="<?php echo $key->cat_name; ?>"></td>
        </tr>
        <tr>
          <td>Deskripsi</td>
          <td>:</td>
          <td><input type="text" name="deskripsi" value="<?php echo $key->cat_description; ?>"></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    <?php endforeach ?>
    </div>
</html>