
<?php echo form_open( 'levels/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

<div class="form-group">
   <label for="level_id"><font color="white">ID Level</font></label>
   <input type="text" class="form-control" name="level_id" value="<?php echo set_value('level_id') ?>" required>
   <div class="invalid-feedback"></div>
</div>
<div class="form-group">
   <label for="nama_level"><font color="white">Nama Level</font></label>
   <input type="text" class="form-control" name="nama_level" value="<?php echo set_value('nama_level') ?>" required>
   <div class="invalid-feedback"></div>
</div>

<button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button>