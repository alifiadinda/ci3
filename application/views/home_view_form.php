<!DOCTYPE html>
<html lang="en">

    
            <?php
            $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
          ?>
          <?php echo validation_errors(); ?>
          <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
          <?php echo form_open_multipart(current_url(), array('class' => 'needs-validation', 'novalidate' => '')); ?>
          <div class="form-group">
            <label for="title">Judul Blog</label>
            <input type="text" class="form-control" name="judul_blog" value="<?php echo set_value('judul_blog', $artikel->judul_blog) ?>" required>
        
          </div>
          <div class="form-group">
            <label for="title">Tanggal Blog</label>
            <input type="date" class="form-control" name="tanggal_blog" value="<?php echo set_value('tanggal_blog', $artikel->tanggal_blog) ?>" required>
            <div class="invalid-feedback">Isi Tanggal</div>
          </div>
          <div class="form-group">
            <label for="title">Content</label>
            <input type="text" class="form-control" name="content" value="<?php echo set_value('content', $artikel->content) ?>" required>
            <div class="invalid-feedback">Isi Kontent</div>
          </div>
          <div class="form-group">
            <label for="title">Sumber</label>
            <input type="text" class="form-control" name="sumber" value="<?php echo set_value('sumber', $artikel->sumber) ?>" required>
            <div class="invalid-feedback">Isi sumber</div>
          </div>
           <div class="form-group">
            <label for="title">Lokasi Penulisan</label>
            <input type="text" class="form-control" name="lokasi_penulisan" value="<?php echo set_value('lokasi_penulisan', $artikel->lokasi_penulisan) ?>" required>
            <div class="invalid-feedback">Isi Lokasi</div>
          </div>
          <div class="form-group">
            <label for="title">Penulis</label>
            <input type="text" class="form-control" name="penulis" value="<?php echo set_value('penulis', $artikel->penulis) ?>" required>
            <div class="invalid-feedback">Isi Penulis</div>
          </div>
       <div class="form-group">
            <label>Kategori</label>
            <?php echo form_dropdown('id', $categories, set_value('id', $artikel->id_cat), 'class="form-control" required' ); ?>
            <div class="invalid-feedback">Pilih dulu kategorinya gan</div>
          </div>
          <div class="form-group">
            <?php if( $artikel->image ) : ?>
            <img class="card-img-top" src="<?php echo base_url() .'img/'. $artikel->image ?>" alt="Card image cap" width=300>
            <?php endif; ?>

            <label for="thumbnail">Gambar</label>
            <input type="file" class="form-control-file" name="thumbnail">
          </div>
          <button id="submitBtn" type="submit" class="btn btn-primary">Post</button>
        </form>
    
  </div>
  <div style="clear:both; height: 40px"></div>
</div>
  
</html>
