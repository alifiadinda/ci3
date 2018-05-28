

      <?php echo validation_errors(); ?>
      <?php echo form_open_multipart( 'blog/tambah', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

      <table>
        <tr>
          <td><font color="white">Judul</td></font>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
            <td><font color="white">Content</td></font>
          <td>:</td>
          <td><input type="text" name="input_content" value="<?php echo set_value('input_content'); ?>"></td>
        </tr>
        <tr>
            <td><font color="white">Tanggal</td></font>
          <td>:</td>
          <td><input type="text" name="input_tanggal" value="<?php echo set_value('input_tanggal'); ?>"></td>
        </tr>
        <tr>
            <td><font color="white">Gambar</td></font>
          <td>:</td>
          <td><input type="file" name="input_gambar" value="<?php echo set_value('input_gambar'); ?>"></td>
        </tr>
        <tr>
            <td><font color="white">Penulis</td></font>
          <td>:</td>
          <td><input type="text" name="input_penulis" value="<?php echo set_value('input_penulis'); ?>"></td>
        </tr>
        <tr>
            <td><font color="white">Sumber</td></font>
          <td>:</td>
          <td><input type="text" name="input_sumber" value="<?php echo set_value('input_sumber'); ?>"></td>
        </tr>
        <tr>
            <td><font color="white">Lokasi Penulisan</td></font>
          <td>:</td>
          <td><input type="text" name="input_lokasi_penulisan" value="<?php echo set_value('input_lokasi_penulisan'); ?>"></td>
        </tr>
           <tr>
            <td><font color="white">Kategori</td></font>
          <td>:</td>
          <td><?php echo form_dropdown('id_cat', $categories, set_value('id_cat'), 'class="form-control" required' ); ?></td>
        </tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    </div>
