<div class="container">
   <div class="py-5 text-center">
      <font color="white"><h2>Hi, <?php echo $user->nama; ?>
       <span class="badge badge-primary">
          <?php echo $user->nama_level; ?>
       </span>
          <?php echo "<br> Nice to meet you!"; ?>
       </h2><br><br>
      <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm">
          <a href="<?php echo base_url().'blog/tambah'?>">
            <img src="../img/kopi2.jpg" class="img-fluid"> <br><br>
            <h4>Create News</h4>
          </a>
        </div> 
        <div class="col-sm">
          <a href="<?php echo base_url().'Category/create'?>">
            <img src="../img/kopi2.jpg" class="img-fluid"> <br><br>
            <h4>Create Category</h4>
          </a>
        </div> 
          <div class="col-sm">
          <a href="<?php echo base_url().'Users/Register'?>">
            <img src="../img/kopi2.jpg" class="img-fluid"> <br><br>
            <h4>Create User</h4>
          </a>
        </div> 
          <div class="col-sm">
          <a href="<?php echo base_url().'Levels/create'?>">
            <img src="../img/kopi2.jpg" class="img-fluid"> <br><br>
            <h4>Create Level</h4>
          </a>
        </div> 
        <div class="col-sm">
          <a href="<?php echo base_url() ?>blog?>">
            <img src="../img/kopi2.jpg" class="img-fluid"> <br><br>
            <h4>View and CRUD Artikel</h4>
          </a>
        </div> 
        <div class="col-sm">
          <a href="<?php echo base_url() ?>category?>">
            <img src="../img/kopi2.jpg" class="img-fluid"> <br><br>
            <h4>View and CRUD Category</h4>
          </a>
        </div> 
        <div class="col-sm">
          <a href="<?php echo base_url() ?>users?>">
            <img src="../img/kopi2.jpg" class="img-fluid"> <br><br>
            <h4>View and CRUD User</h4>
          </a>
        </div> 
        <div class="col-sm">
          <a href="<?php echo base_url() ?>levels?>">
            <img src="../img/kopi2.jpg" class="img-fluid"> <br><br>
            <h4>View and CRUD Level</h4>
          </a>
        </div> 
        <div class="col-sm"></div>
      </div>
   </div>
</div>