<?php 
	$soal = unserialize($uraian['soal_uraian_data']);
	$jawaban = unserialize($uraian['soal_uraian_detail_data']);
?>

<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Koreksi Soal Uraian</h2>
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
			<form method="post" action="<?php echo base_url('soal/uraian_koreksi') ?>">
				<div class="form-group">
					<div><label class="h3"><?php echo $uraian['soal_uraian_nama'] ?></label></div>
    				<span><?php echo $uraian['siswa_nama'] ?></span>	
				</div>
				<?php foreach ($soal as $key => $var): ?>
					<div class="line">
						<hr>
					</div>
					<div class="form-group">
						<label class="form-control-label"><p class="m-0"><b>[ <?= $key ?> ]</b> <?php echo str_replace(PHP_EOL, "<br>", $var['pertanyaan']) ?></p></label>
						<div class="font-italic" style="font-size: 13px">Jawaban :</div>
						<label class="form-control-label"><p class="m-0"><?php echo str_replace(PHP_EOL, "<br>", $jawaban[$key]) ?></p></label>
					</div>
				<?php endforeach ?>
				<div class="line">
					<hr>
				</div>
				<div class="form-group">
					<label>Nilai</label>
					<input type="hidden" name="soal_id" id="soal_id" value="<?php echo $uraian['soal_uraian_detail_id'] ?>" class="form-control">
					<input required="" value="<?php echo $uraian['nilai_siswa'] ?>" type="number" name="nilai" id="nilai" class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>
		</div>
	</div>
</div>