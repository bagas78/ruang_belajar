<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Soal</h2>
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
			<h3 class="h4">Daftar Pekerjaan Siswa</h3>
		</div>
		<div class="card-body">
			<div class="table-responsive table-hover">
				<table class="table" id="tbl-siswa">
					<thead>
						<tr>
							<th>NO</th>
							<th>NAMA SOAL</th>
							<th>NAMA SISWA</th>
							<th>NILAI</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($soal as $key => $var): ?>
							<tr>
								<td><?php echo $key+1 ?></td>
								<td><?php echo $var['soal_uraian_nama'] ?></td>
								<td><?php echo $var['siswa_nama'] ?></td>
								<td><?php echo $var['nilai_siswa'] ?></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('table').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'print','copy', 'excel', 'pdf'
                    ]
                });
	});
</script>