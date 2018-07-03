<!DOCTYPE html>
<html lang="en">
	<div class="container">
    <?php foreach ($single as $key): ?>
      <?php
        echo form_open('levels/Edit/'.$key->level_id, array('enctype'=>'multipart/form-data')); 
       ?>
	<table>
        <tr>
          <td>Nama Level</td>
          <td>:</td>
          <td><input type="text" name="nama_level" value="<?php echo $key->nama_level; ?>"></td>
        </tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    <?php endforeach ?>
    </div>
</html>