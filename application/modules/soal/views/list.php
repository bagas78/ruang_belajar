<div class="d-block">
	<table class="table table-hover table-inverse">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA SOAL</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($soal as $key => $var): ?>
				<tr>
					<td><?php echo $key+1 ?></td>
					<td><?php echo $var['soal_nama'] ?></td>
					<td><a href="<?php echo base_url('soal/work/'.$var['soal_id']) ?>" class="btn btn-sm btn-success">Kerjakan <i class="fas fa-arrow-right"></i></a></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$("table").DataTable();
</script>