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
			<form method="post">
				<div class="form-group">
					<label class="form-control-label">NAMA SOAL</label>
					<input required="" autocomplete="off" type="text" name="soal_nama" value="<?php echo $soal['soal_nama'] ?>" placeholder="NAMA SOAL" class="form-control">
				</div>
				<?php foreach (unserialize($soal['soal_data']) as $i => $var): ?>
					<div class="line">
						<hr>
					</div>
					<div class="form-group">
						<label class="form-control-label"><b>[ NO : <?= $i ?> ]</b> PERTANYAAN</label>
						<textarea placeholder="Masukkan pertanyaan" class="form-control" name="soal[<?= $i ?>][pertanyaan]"><?php echo $var['pertanyaan'] ?></textarea>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label class="form-control-label">Jawaban <b>a</b> :</label>
								<textarea required="" placeholder="Masukkan Jawaban a" class="form-control" name="soal[<?= $i ?>][a]"><?php echo $var['a'] ?></textarea>
							</div>
							<div class="col-md-6">
								<label class="form-control-label">Jawaban <b>b</b> :</label>
								<textarea required="" placeholder="Masukkan Jawaban b" class="form-control" name="soal[<?= $i ?>][b]"><?php echo $var['b'] ?></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label class="form-control-label">Jawaban <b>c</b> :</label>
								<textarea required="" placeholder="Masukkan Jawaban c" class="form-control" name="soal[<?= $i ?>][c]"><?php echo $var['c'] ?></textarea>
							</div>
							<div class="col-md-6">
								<label class="form-control-label">Jawaban <b>d</b> :</label>
								<textarea required="" placeholder="Masukkan Jawaban d" class="form-control" name="soal[<?= $i ?>][d]"><?php echo $var['d'] ?></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label class="form-control-label">Kunci Jawaban</label>
								<select name="soal[<?= $i ?>][kunci]" class="form-control">
									<option value="">Pilih Kunci Jawaban</option>
									<option <?php echo ($var['kunci'] == 'a') ? 'selected' : '' ?> value="a">a</option>
									<option <?php echo ($var['kunci'] == 'b') ? 'selected' : '' ?> value="b">b</option>
									<option <?php echo ($var['kunci'] == 'c') ? 'selected' : '' ?> value="c">c</option>
									<option <?php echo ($var['kunci'] == 'd') ? 'selected' : '' ?> value="d">d</option>
								</select>
							</div>
						</div>
					</div>
				<?php endforeach ?>
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