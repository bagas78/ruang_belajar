<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Siswa</h2>
  </div>
</header>

<div class="container mt-4">
	<?php if ($this->session->flashdata('success') == 'y'): ?>
		<div class="alert alert-success alert-dismissible">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>Success!</strong> Perubahan telah disimpan.
		</div>
	<?php elseif($this->session->flashdata('success') == 'n'): ?>
		<div class="alert alert-danger alert-dismissible">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>Failed!</strong> Perubahan gagal disimpan.
		</div>
	<?php endif ?>
</div>

<div class="container mt-4" id="data-siswa">
	<div class="card">
		<div class="card-close">
			<div class="dropdown">
				<button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
				<div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
			</div>
		</div>
		<div class="card-header d-flex align-items-center">
			<h3 class="h4">Data Siswa</h3>
		</div>
		<div class="card-body">
			<form method="post" id="form">
				<div class="form-group">
					<label>NOMOR INDUK</label>
					<input class="form-control" type="text" name="siswa_id" id="siswa_id" required="" autocomplete="off">
				</div>
				<div class="form-group">
					<label>NAMA SISWA</label>
					<input class="form-control" type="text" name="siswa_nama" id="siswa_nama" required="" autocomplete="off">
				</div>
				<div>
					<button class="btn btn-primary">Simpan</button>
					<button id="btn-hapus" type="button" class="btn btn-danger">Hapus</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="container mt-4">
	<div class="card">
		<div class="card-close">
			<div class="dropdown">
				<button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
				<div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
			</div>
		</div>
		<div class="card-header d-flex align-items-center">
			<h3 class="h4">Tabel Siswa</h3>
		</div>
		<div class="card-body">
			<div class="table-responsive table-hover">
				<table class="table" id="tbl-siswa">
					<thead>
						<tr>
							<th>NO</th>
							<th>NOMOR INDUK</th>
							<th>NAMA SISWA</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($siswa as $key => $var): ?>
							<tr>
								<td><?php echo $key+1 ?></td>
								<td><?php echo $var['siswa_id'] ?></td>
								<td><?php echo $var['siswa_nama'] ?></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function($){
		var table = $('table').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'print','copy', 'excel', 'pdf'
                    ]
                });
		$('#tbl-siswa tbody').on( 'click', 'tr', function () {
			$('html, body').animate({
    		    scrollTop: $("#data-siswa").offset().top
    		}, 350);
    		var data = table.row( this ).data();
    		$('#siswa_id').val(data[1]);
    		$('#siswa_id').focus();
    		$('#siswa_nama').val(data[2]);
		    console.log( data );
		});
	});
	$('#btn-hapus').click(function(event) {
		if ($('#siswa_id').val() != '') {
			var conf = confirm("Anda yakin akan menghapus data siswa ?");
			if (conf) {
				$.post('<?php echo base_url('siswa/hapus_siswa') ?>', $('#form').serialize(), function(data, textStatus, xhr) {
					if (data == '1') {
						location.reload();
					}
				});
			}
		}
	});
</script>