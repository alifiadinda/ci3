<!doctype html>
<html lang="en">
<head>
  <base href="<?=base_url()?>">
  <meta charset="UTF-8">
  <title>uptade category</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Update Category</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="home">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="blog">Blog</a></li>
            <li class="active"><a href="category">category</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br>

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

</body>
</html>