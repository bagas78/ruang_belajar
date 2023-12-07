<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Tambah Soal</h2>
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
			<form method="post" action="<?php echo base_url('soal/post') ?>">
				<div class="form-group">
					<label class="form-control-label">NAMA SOAL</label>
					<input required="" autocomplete="off" type="text" name="soal_nama" placeholder="NAMA SOAL" class="form-control">
				</div>
				<?php for ($i=1; $i <= 10 ; $i++): ?>
					<div class="line">
						<hr>
					</div>
					<div class="form-group">
						<label class="form-control-label"><b>[ NO : <?= $i ?> ]</b> PERTANYAAN</label>
						<textarea placeholder="Masukkan pertanyaan" class="form-control" name="soal[<?= $i ?>][pertanyaan]"></textarea>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label class="form-control-label">Jawaban <b>a</b> :</label>
								<textarea required="" placeholder="Masukkan Jawaban a" class="form-control" name="soal[<?= $i ?>][a]"></textarea>
							</div>
							<div class="col-md-6">
								<label class="form-control-label">Jawaban <b>b</b> :</label>
								<textarea required="" placeholder="Masukkan Jawaban b" class="form-control" name="soal[<?= $i ?>][b]"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label class="form-control-label">Jawaban <b>c</b> :</label>
								<textarea required="" placeholder="Masukkan Jawaban c" class="form-control" name="soal[<?= $i ?>][c]"></textarea>
							</div>
							<div class="col-md-6">
								<label class="form-control-label">Jawaban <b>d</b> :</label>
								<textarea required="" placeholder="Masukkan Jawaban d" class="form-control" name="soal[<?= $i ?>][d]"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label class="form-control-label">Kunci Jawaban</label>
								<select name="soal[<?= $i ?>][kunci]" class="form-control">
									<option value="">Pilih Kunci Jawaban</option>
									<option value="a">a</option>
									<option value="b">b</option>
									<option value="c">c</option>
									<option value="d">d</option>
								</select>
							</div>
						</div>
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