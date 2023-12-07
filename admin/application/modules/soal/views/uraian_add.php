<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Tambah Soal Uraian</h2>
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
			<form method="post" action="<?php echo base_url('soal/uraian_post') ?>">
				<div class="form-group">
					<label class="form-control-label">NAMA SOAL</label>
					<input required="" autocomplete="off" type="text" name="soal_uraian_nama" placeholder="NAMA SOAL" class="form-control">
				</div>
				<?php for ($i=1; $i <= 10 ; $i++): ?>
					<div class="line">
						<hr>
					</div>
					<div class="form-group">
						<label class="form-control-label"><b>[ NO : <?= $i ?> ]</b> PERTANYAAN</label>
						<textarea placeholder="Masukkan pertanyaan" class="form-control" name="soal_uraian[<?= $i ?>][pertanyaan]"></textarea>
					</div>
				<?php endfor ?>
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