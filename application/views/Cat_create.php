
<?php echo form_open( 'category/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

<div class="form-group">
   <label for="cat_name"><font color="white">Nama Kategori</font></label>
   <input type="text" class="form-control" name="cat_name" value="<?php echo set_value('cat_name') ?>" required>
   <div class="invalid-feedback"></div>
</div>

<div class="form-group">
   <label for="text"><font color="white">Deskripsi</font></label>
   <input type="text" class="form-control" name="cat_description" value="<?php echo set_value('cat_description') ?>" required>
   <div class="invalid-feedback"></div>
</div>
<button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button>