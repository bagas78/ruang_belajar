<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Tambah Level</h2>
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
			<form method="post" action="<?php echo base_url("administrator/level_insert_post") ?>">
				<div class="form-group">
					<label class="form-control-label">NAMA</label>
					<input required="" autocomplete="off" type="text" name="level_nama" placeholder="nama admin" class="form-control">
				</div>
				<div class="line">
					<hr>
				</div>
				<div class="form-group">
					<label class="form-control-label">ADMINISTRATOR</label>
					<select class="form-control" name="menu[]">
						<option value="administrator">Beri Akses</option>
						<option value="n">Larang Akses</option>
					</select>
				</div>
				<div class="form-group">
					<label class="form-control-label">KOMPETENSI</label>
					<select class="form-control" name="menu[]">
						<option value="kompetensi">Beri Akses</option>
						<option value="n">Larang Akses</option>
					</select>
				</div>
				<div class="form-group">
					<label class="form-control-label">TUJUAN</label>
					<select class="form-control" name="menu[]">
						<option value="tujuan">Beri Akses</option>
						<option value="n">Larang Akses</option>
					</select>
				</div>
				<div class="form-group">
					<label class="form-control-label">SISWA</label>
					<select class="form-control" name="menu[]">
						<option value="siswa">Beri Akses</option>
						<option value="n">Larang Akses</option>
					</select>
				</div>
				<div class="form-group">
					<label class="form-control-label">SOAL</label>
					<select class="form-control" name="menu[]">
						<option value="soal">Beri Akses</option>
						<option value="n">Larang Akses</option>
					</select>
				</div>
				<div class="form-group">
					<label class="form-control-label">TENTANG</label>
					<select class="form-control" name="menu[]">
						<option value="tentang">Beri Akses</option>
						<option value="n">Larang Akses</option>
					</select>
				</div>
				<div class="form-group">
					<label class="form-control-label">MATERI</label>
					<select class="form-control" name="menu[]">
						<option value="materi">Beri Akses</option>
						<option value="n">Larang Akses</option>
					</select>
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