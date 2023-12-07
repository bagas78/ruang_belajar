<style type="text/css">
td {
  vertical-align: top;
}
</style>
<div class="d-block" id="head-soal">
	<div class="d-block" align="center">
		<h3><?php echo $soal['soal_nama'] ?></h3>
	</div>
	<hr>
	<div class="d-block" >
		<h4 class="m-1 float-left">Nama : <?php echo $soal['siswa_nama'] ?></h4>
		<h4 class="m-1 float-right">Nilai anda : <?php echo $soal['nilai_siswa'] ?></h4>
		<div class="clearfix"></div>
	</div>
	<hr>
	<form method="post" id="form" action="<?php echo base_url("soal/post") ?>">
		<table>
		<?php $jawaban = unserialize($soal['jawaban_siswa']) ?>
		<?php foreach (unserialize($soal['soal_data']) as $key => $var): ?>
			<tr>
				<td><p><?php echo $key ?>.</p></td>
				<td><p><?php echo str_replace(PHP_EOL, "<br>", $var['pertanyaan'] )?></p></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<fieldset>
						<table>
							<tr>
								<td>
									<p class="mr-2 <?php echo ($jawaban[$key] == 'a') ? 'font-weight-bold text-danger' : '' ?>">a. </p>
								</td>
								<td class="mr-2 <?php echo ($jawaban[$key] == 'a') ? 'font-weight-bold text-danger' : '' ?>"><?php echo $var['a'] ?></td>
							</tr>
							<tr>
								<td>
									<p class=" <?php echo ($jawaban[$key] == 'b') ? 'font-weight-bold text-danger' : '' ?>">b. </p>
								</td>
								<td class=" <?php echo ($jawaban[$key] == 'b') ? 'font-weight-bold text-danger' : '' ?>"><?php echo $var['b'] ?></td>
							</tr>
							<tr>
								<td>
									<p class=" <?php echo ($jawaban[$key] == 'c') ? 'font-weight-bold text-danger' : '' ?>">c. </p>
								</td>
								<td class=" <?php echo ($jawaban[$key] == 'c') ? 'font-weight-bold text-danger' : '' ?>"><?php echo $var['c'] ?></td>
							</tr>
							<tr>
								<td>
									<p class=" <?php echo ($jawaban[$key] == 'd') ? 'font-weight-bold text-danger' : '' ?>">d. </p>
								</td>
								<td class=" <?php echo ($jawaban[$key] == 'd') ? 'font-weight-bold text-danger' : '' ?>"><?php echo $var['d'] ?></td>
							</tr>
							<tr>
								<td class="font-weight-bold text-success"><i class="fa fa-check"></i></td>
								<td class="font-weight-bold text-success">Jawaban : <?php print_r($var['kunci']) ?>. <?php print_r($var[$var['kunci']]) ?></td>
							</tr>
						</table>
					</fieldset>
				</td>
			</tr>
		<?php endforeach ?>
		</table>
	</form>
</div>