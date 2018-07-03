<!DOCTYPE html>
<html lang="en">
	<div class="container">
    <?php foreach ($single as $key): ?>
      <?php
        echo form_open('users/Edit/'.$key->user_id, array('enctype'=>'multipart/form-data')); 
       ?>
	<table>
        <tr>
          <td>Id User</td>
          <td>:</td>
          <td><input type="text" name="id" readonly value="<?php echo $key->user_id; ?>"></td>
        </tr>
        <tr>
          <td>Level ID</td>
          <td>:</td>
          <td><input type="text" name="membership" value="<?php echo $key->fk_level_id; ?>"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" name="nama" readonly value="<?php echo $key->nama; ?>"></td>
        </tr>
        <tr>
          <td>Kode Pos</td>
          <td>:</td>
          <td><input type="text" name="kodepos" readonly value="<?php echo $key->kodepos; ?>"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td><input type="text" name="email" readonly value="<?php echo $key->email; ?>"></td>
        </tr>
        <tr>
          <td>Username</td>
          <td>:</td>
          <td><input type="text" name="username" readonly value="<?php echo $key->username; ?>"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input type="text" name="password" readonly value="<?php echo $key->password; ?>"></td>
        </tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    <?php endforeach ?>
    </div>
</html>