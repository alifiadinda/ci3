<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Begin page content -->
<main role="main" class="container">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<?php
						$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
					?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('users/register', array('class' => 'needs-validation', 'novalidate' => '')); ?>
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
					</div>
					<div class="form-group">
						<label>Kodepos</label>
						<input type="text" class="form-control" name="kodepos" placeholder="Kodepos">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<div class="form-group">
						<label>Konfirmasi Password</label>
						<input type="password" class="form-control" name="password2" placeholder="Ulangi Password">
					</div>
					<div class="form-group">
					    <label for="">Pilihan</label>
					    <div class="form-check">
					        <input class="form-check-input" type="radio" name="membership" id="admin" value="1" checked>
					        <label class="form-check-label" for="admin">Admin</label>
					    </div>
					    <div class="form-check">
					        <input class="form-check-input" type="radio" name="membership" id="mainmember" value="2" checked>
					        <label class="form-check-label" for="mainmember">Main Member</label>
					    </div>
					     <div class="form-check">
					        <input class="form-check-input" type="radio" name="membership" id="membermedium" value="3">
					        <label class="form-check-label" for="membermedium">Member Medium</label>
					    </div>
					</div>
					<button type="submit" class="btn btn-primary btn-block">Daftar</button>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</section>
</main>

