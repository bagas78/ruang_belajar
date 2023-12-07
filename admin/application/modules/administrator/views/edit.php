<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Edit Admin</h2>
  </div>
</header>

<div class="container mt-4">
	<div class="card">
		<div class="card-close">
			<div class="dropdown">
				<button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
				<div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
			</div>
		</div>
		<div class="card-header d-flex align-items-center">
			<h3 class="h4">Form</h3>
		</div>
		<div class="card-body">
			<div class="preview">
        		<p>Preview</p>
        		<img id="preview" class="img img-thumbnail" style="width: 128px; height: auto;" src="<?= (!empty($admin['user_foto']) ? base_url('assets/uploads/'.$admin['user_foto']."?".time()) : base_url('assets/uploads/default-image.jpg')) ?>">
        	</div>
			<form method="post" action="<?php echo base_url("administrator/edit_post") ?>" enctype="multipart/form-data">
				<div class="form-group">
            	  <label class="form-control-label">FOTO</label>
            	  <input accept=".jpg, .jpeg" id="gambar" name="user_foto" type="file" placeholder="Pilih gambar" class="form-control">
            	</div>
				<div class="form-group">
					<label class="form-control-label">NAMA</label>
					<input type="hidden" name="user_id" value="<?php echo $admin['user_id'] ?>">
					<input required="" value="<?php echo $admin['user_nama'] ?>" autocomplete="off" type="text" name="user_nama" placeholder="nama admin" class="form-control">
				</div>
				<div class="form-group">
					<label class="form-control-label">EMAIL</label>
					<input required="" value="<?php echo $admin['user_email'] ?>" autocomplete="off" type="email" name="user_email" placeholder="email admin" class="form-control">
				</div>
				<div class="form-group">
					<label class="form-control-label">LEVEL</label>
					<select required="" autocomplete="off" type="text" name="level_id" class="form-control">
						<?php foreach ($level as $key => $var): ?>
							<option <?php echo ($admin['level_id'] == $var['level_id']) ? 'selected' : '' ?> value="<?php echo $var['level_id'] ?>"><?php echo $var['level_nama'] ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group">
					<label class="form-control-label">PASSWORD</label> <small class="text-danger">*(Kosongkan jika tidak ingin mengganti password!)</small>
					<input autocomplete="off" type="password" name="user_password" placeholder="password admin" class="form-control">
				</div>
				<div class="line">
					<hr>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
  $("#gambar").change(function(event) {
    /* Act on the event */
    var output = document.getElementById('preview');
    output.src = URL.createObjectURL(event.target.files[0]);
  });
</script>