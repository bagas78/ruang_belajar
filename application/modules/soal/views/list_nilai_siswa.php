<div class="d-block">
	<table class="table table-hover table-inverse">
		<thead>
			<tr>
				<th>NO</th>
				<th>INDUK</th>
				<th>SOAL</th>
				<th>SISWA</th>
				<th>NILAI</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($soal as $key => $var): ?>
				<tr>
					<td><?php echo $key+1 ?></td>
					<td><?php echo $var['siswa_id'] ?></td>
					<td><?php echo $var['soal_nama'] ?></td>
					<td><?php echo $var['siswa_nama'] ?></td>
					<td><?php echo $var['nilai_siswa'] ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$("table").DataTable();
</script>